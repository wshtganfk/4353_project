<!DOCTYPE htm>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Animated Login </title>
        <link rel ="stylesheet" href="login.css">
    </head>
    <body>
       

        <form class="LG" action="login.php" method="post">
        <h1>login</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="" value="Login">
        <a href="register.html">Don't have account? </a>
        
        </form>

    </body>
</html>
<?php
session_destory();
?>
