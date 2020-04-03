<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome page</title>
</head>
<body>
<h1>Welcome Back</h1>
<a href ="index.php">logout</a>

</body>
</html>

<?php
}
else{
    echo "incorrect";
    header("refresh:2;url = index.php");
}
?>