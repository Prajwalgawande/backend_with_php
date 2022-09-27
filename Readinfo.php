<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
header("Access-Control-Allow-Headers: *");
  
$data=json_decode(file_get_contents('php://input'),true);
include 'config.php';

$sql='SELECT * FROM resellerlist';
$result=mysqli_query($conn, $sql) or die("sql query failled. ");

if(mysqli_num_rows($result)>0){
    $output=mysqli_fetch_all($result, MYSQLI_ASSOC);
    print json_encode($output);
}

?>