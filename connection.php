<?php
$server="localhost";
$user="root";
$password="1030682619";
$db="neureka";

$connection= new mysqli($server,$user,$password,$db);
if($connection->connect_error){
    die("Connection error: ".$connection->connect_error);
}
echo "Connection stablished";
?>