<?php
$con = mysqi_connect("127.0.0.1:3306","puppet_root", "root123", "sack_web_puppet");


$phone = $_POST["Phone"];
$password = $_POST["Password"];

$statement = mysqli_prepare($con, "SELECT * FROM user WHERE phone = ? AND password = ?");
mysqli_stmt_bind_param($statement, "ss", $phone, $password);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $phone, $name, $phone, $password);

$response = array();
$response["success"] = false;

while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;
        $response["Name"] = $name;
        $response["Phone"] = $phone;
        $response["Password"] = $password;

 }

echo json_encode($response);
 ?>
