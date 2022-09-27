<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
header("Access-Control-Allow-Headers: *");
  
$data=json_decode(file_get_contents('php://input'),true);
include 'config.php';
if(isset($data)){
$name=$data['name'];
$emailaddress=$data['emailaddress'];
$phone=$data['phone'];
$commission=$data['commission'];
$einno=$data['einno'];

$sql="INSERT INTO resellerlist (name, email, phone, commission ,einno) VALUES ('{$name}', '{$emailaddress}', '{$phone}','{$commission}','{$einno}')";
if(mysqli_query($conn,$sql)){
    echo json_encode("done insertion");
}
}
?>