<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
header("Access-Control-Allow-Headers: *");
  
$data=json_decode(file_get_contents('php://input'),true);
include 'config.php';
if(isset($data)){
$einno=$data['einno'];
$sql="DELETE FROM resellerlist WHERE einno={$einno}";
if(mysqli_query($conn,$sql)){
    print "Deleted user";
}else{
    echo" error";
}
}
?>