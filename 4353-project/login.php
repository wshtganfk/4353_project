<?php

$name = $_POST['name'];
$password = $_POST['password'];
session_start();

$conn = mysqli_connect("localhost","root",",","users");
$result = mysqli_query($conn,"SELECT*FROM'users'WHERE'name'='$name'&&'password' = '$password'");
$count = mysqli_num_rows($result);
if($count = 1){
    echo "login success";
    header("refresh:2;url = welcome.php");

}
else{
    echo"user ID or password is not match";
    header("refresh:2;url = index.php");
}
?>