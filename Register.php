<?php
$con = mysqi_connect("127.0.0.1:3306","puppet_root", "root123", "sack_web_puppet");

$Name = $_POST["Name"];
$Phone = $_POST["Phone"]
$Password = $_POST["Password"];

$statement = mysqli_prepare($con, "INSERT INTO user (Name, Phone, Password) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($statement, "siss", $Name, $Phone, $Password);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);


 ?>
