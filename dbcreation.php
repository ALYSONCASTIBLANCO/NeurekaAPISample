<?php
$server="localhost";
$user="root";
$password="1030682619";

$connection= new mysqli($server,$user,$password);
if($connection->connect_error){
    die("Connection error: ".$connection->connect_error);
}
echo "Connection stablished";

$sql="CREATE DATABASE neureka";

if($connection->query($sql)===TRUE){
    echo "Created Database";
}
else{
    echo "Database creation error ".$connection->error;
}
?>