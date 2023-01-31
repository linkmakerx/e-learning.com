<?php

session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userregistration');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from usertable where name = '$username' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num != 0){
    echo "Username already exist, please try something else";
}else{
    $reg = " insert into usertable (firstname, lastname, username, email, password) values ('$firstname','$lastname','$username','$email','$password')";
    mysqli_query($con, $reg);
    header('location:login.php');
}

?>