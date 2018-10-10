<?php
$con = mysqi_connect("127.0.0.1","puppet_root", "root123", "sack_web_puppet", "3306");

$name = $_POST["name"];
$phone = $_POST["phone"]
$password = $_POST["password"];

$statement = mysqli_prepare($con, "INSERT INTO user (name, phone, password) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($statement, "siss", $name, $phone, $password);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);


 ?>
