let user = process.argv[2];
process.send(`<html>

<title>Admin Profile</title>
<body>
<h1>Entity:username</h1>
<h1>Value:${user}</h1>

<h1>Change Admin profile's Entity Here 👇</h1>
<form method="post" action="add">
    <input name="userName" value="username" hidden>
    <p>用户名：<input type="text" name="nameVal"></p>
    <p><input type="submit" value="确定">
       <input type="reset" value="取消">
    </p>

</body>

</html>`);
