<?php
   include("connection.php");
?>      
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

    <div id="loginBox">
        <h1>Login</h1>
        <form name="loginForm" action="login_process.php" onsubmit="return isvalid()" method="POST">
            <label>Username: </label>
            <input type="text" id="username" name="user"><br><br>

            <label>Password:</label>
            <input type="password" id="password" name="pass"><br><br>

            <input type="submit" id="loginBtn" value="Login" name="submit"/>
        </form>
    </div>
    <script>
function isvalid(){
    var user = document.loginForm.user.value;
    var pass = document.loginForm.pass.value;

    if(user.length=="" && pass.length==""){
        alert("Username and password is empty");
        return false;
    }
    else{
        if(user.length==""){
            alert("Username required");
            return false;
        }
        if(pass.length==""){
            alert("Password required");
            return false;
        }
    }
}
</script>

</body>
</html>