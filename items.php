<?php
$con = mysqi_connect("my_host","my_user", "my_password", "my_db");


$username = $_POST["phone"];
$password = $_POST["password"];

$statement = mysqli_prepare($con, "SELECT * FROM user WHERE username = ? AND password = ?");
mysqli_stmt_bind_param($statement, "ss", $phone, $password);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $userID, $name, $phone, $password);

$response = array();
$response["success"] = false;

while(mysqli_stmt_fetch($statement)){
        $response["success"] = true
        $response["name"] = $name;
        $response["phone"] = $phone;
        $response["password"] = $password;

 }

echo json_encode($response);
echo success;
?>

