<?php
$con=mysqli_connect("localhost","id3231563_loginform","Adminbmwx6","id3231563_testdb");

$username = $_POST["username"];
$password = $_POST["password];
$name = $_POST["name"];
$age = $_POST["age"];

$statement = mysqli_prepare($con, "INSERT INTO user (name,age,username,password) VALUES(?,?,?,?)";
mysqli_stmt_bind_param($statement, "siss",$name,$age,$username,$password);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);

?>