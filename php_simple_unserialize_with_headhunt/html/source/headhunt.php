<?php
if(!defined('ALLOW_ACCESS')) { die('Access Denied');}

$times = Val('times', 'GET');
switch ($times) {
    case 1 or 10:

        if(!isset($user->hechengyu) | $times * 600 > $user->hechengyu){
            ShowError('No enough hechengyu');
        }
        $user->Deduction($times);

        $six_rate = intval($user->trash / 10 + 1) * 0.02;
        $five_rate = (1 - $six_rate) / (8+48+42) * 8;
        $four_rate = (1 - $six_rate) / (8+48+42) * 48;
        $three_rate = (1 - $six_rate) / (8+48+42) * 42;

        $rate = [
            'six' => $six_rate,
            'five' => $five_rate + $six_rate,
            'four' => $four_rate + $five_rate + $six_rate,
            'three' => $three_rate + $four_rate + $five_rate + $six_rate,
        ];

        foreach($rate as $key => $value) {
            $rate[$key] = intval($value * 100);
        }

        $operators = [
            "5" => 0,
            "4" => 0,
            "3" => 0,
            "2" => 0,
        ];

        for ($x=0; $x<$times; $x++) {
            $result_number = random_int(0,100);
            if ($result_number <= $rate['six']) {
                $operators["5"] += 1;
            } elseif ($result_number <= $rate['five']) {
                $operators["4"] += 1;
            } elseif ($result_number <= $rate['four']) {
                $operators["3"] += 1;
            } elseif ($result_number <= $rate['three']) {
                $operators["2"] += 1;
            }
        }

        $db = DBConnect();
        $final_operators = [];
        foreach ($operators as $rarity => $num) {
            if ($num > 0){
                $getOp = getOperators($db, $rarity, $num);
                foreach ($getOp as $key => $value) {
                    $final_operators[] = $value;
                }
            }


        }

        if($operators["5"] == 0) {
            $user->GetTrashOperator($times);
        } else {
            $user->GetSixOperator();
        }
//        var_dump($final_operators);
        $smarty=InitSmarty();
        $smarty->assign('do', $do);
        $smarty->assign('show', $show);
        $smarty->assign('url', $url);
        $smarty->assign('operators',$final_operators);
        $smarty->display('index.html');
        break;
    default:
        ShowError("Only one or ten!");
        $smarty=InitSmarty();
        $smarty->assign('do', $do);
        $smarty->assign('show', $show);
        $smarty->assign('url', $url);
        $smarty->display('index.html');

}

function getOperators($conn, $rarity, $num) {
    $operators = [];
    $index=0;
    for ($i=0;$i<$num;$i++) {
        $sql = "select name, rarity, icon from operators where rarity={$rarity} order by rand() limit 1";
        $result = $conn->Execute($sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_row($result)){
                $name = $row[0];
                $rarity = $row[1];
                $icon = $row[2];
                switch ($rarity) {
                    case 5:
                        $color = "gold";
                        break;
                    case 4:
                        $color = "yellow";
                        break;
                    case 3:
                        $color = "indigo";
                        break;
                    case 2:
                        $color = "grey";
                        break;
                    default:
                        $color = "grey";
                }
                $operators[$index++] = array("name"=>$name, "color"=>$color, "icon"=>$icon);
            }
        }
    }

    return $operators;
}

?>

