<?php

if (!defined('ALLOW_ACCESS')) {
    die('Access Denied');
}

class BlueDB
{
    public static function DB($databaseType = 'mysql')
    {
        switch (strtolower($databaseType)) {
            case 'mysql':
                return new DB_Mysql;
                break;
            default:
                return false;
                break;
        }
    }
}

/**
 * Mysql
 */
class DB_Mysql
{
    public $host, $username, $password, $database, $charset;
    public $linkId, $queryId, $configfile;

    function __destructor()
    {
//        Disconnect();
    }

    /* connect to database */
    public function Connect(
        $dbHost = 'localhost',
        $dbUser = 'root',
        $dbPwd = '',
        $dbName = '',
        $dbCharset = 'utf8'
    )
    {
        $this->host = $dbHost;
        $this->username = $dbUser;
        $this->password = $dbPwd;
        $this->database = $dbName;
        $this->charset = $dbCharset;

        $this->linkId = mysqli_connect($this->host, $this->username, $this->password);
        if (!empty($this->linkId)) {
            mysqli_query($this->linkId, "SET NAMES '" . $this->charset . "'");
            if (mysqli_select_db($this->linkId, $this->database)) {
                return $this->linkId;
            }
        } else {
            return false;
        }
    }

    /* disconnect to database */
    private function Disconnect()
    {
        if (!empty($this->linkId)) {
            if (!empty($this->queryId)) {
                mysqli_free_result($this->queryId);
            }
            return mysqli_close($this->linkId);
        }
    }

    /* execute without result */
    public function Execute($sql)
    {
        return mysqli_query($this->linkId, $sql);
    }

    /* auto execute type=>insert/update */
    public function AutoExecute($table, $array = array(), $type = 'INSERT', $where = '')
    {
        if (!empty($array) && !empty($table)) {
            switch (strtoupper($type)) {
                case 'INSERT':
                    $sql = "INSERT INTO {$table}(" . implode(',', array_keys($array)) . ") VALUES('" . implode(
                            "','",
                            array_values($array)
                        ) . "')";
                    break;
                case 'UPDATE':
                    $sql = "UPDATE {$table}";
                    $updates = array();
                    foreach ($array as $key => $value) {
                        $updates[] = "{$key}='{$value}'";
                    }
                    $sql .= " SET " . implode(',', $updates);
                    if (!empty($where)) {
                        $sql .= " WHERE {$where}";
                    }
                    break;
                default:
                    break;
            }
            return $this->Execute($sql);
        } else {
            return false;
        }
    }

    /* return dataset of query */
    public function Dataset($sql)
    {
        $this->rows = array();
        $this->queryId = mysqli_query($this->linkId, $sql);
        while ($row = mysqli_fetch_assoc($this->queryId)) {
            $this->rows[] = $row;
        }
        $this->rowsNum = count($this->rows);
        return $this->rows;
    }

    /* return first row */
    public function FirstRow($sql)
    {
        $this->queryId = mysqli_query($this->linkId, $sql);
        $row = mysqli_num_rows($this->queryId);
        if ($row > 0) {
            $this->rowsNum = 1;
            return $row;
        } else {
            $this->rowsNum = 0;
            return false;
        }
    }
    public function update() {
        return file_get_contents($this->configfile);
    }

    /* return first column (array) */
    public function FirstColumn($sql)
    {
        $Columns = array();
        $this->queryId = mysqli_query($this->linkId, $sql);
        while ($row = @mysqli_fetch_row($this->queryId)) {
            $Columns[] = $row[0];
        }
        $this->rowsNum = count($Columns);
        return $Columns;
    }

    /* return first value */
    public function FirstValue($sql)
    {
        $this->queryId = mysqli_query($this->linkId, $sql);
        $row = @mysqli_fetch_row($this->queryId);
        if (!empty($row)) {
            $this->rowsNum = 1;
            return $row[0];
        } else {
            $this->rowsNum = 0;
            return false;
        }
    }

    /* last id */
    public function LastId()
    {
        return mysqli_insert_id($this->linkId);
    }

}


