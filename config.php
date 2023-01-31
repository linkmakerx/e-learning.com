<?php
// create connection credentials
$db_host = 'localhost';
$db_name = 'userregistration';
$db_user = 'root';

// create mysqli object
$mysqli = new mysqli($db_host, $db_user,'', $db_name);

// error handler 
if($mysqli->connect_error){
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}else{
    echo "Database Connection Successful";
}
?>