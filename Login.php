<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
header("Access-Control-Allow-Headers: *");
  
$data=json_decode(file_get_contents('php://input'),true);
include 'config.php';
if(isset($data)){
$username=$data['username']  ;
$pass=$data['password'] ;

if($username=="prajwal@gmail.com" && $pass== "123456"){
    print json_encode("Welcome");
}
else{
    print json_encode("Enter valid Credentials");
}
}

?>
