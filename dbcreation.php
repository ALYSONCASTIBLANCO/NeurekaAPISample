<?php

//Servidor por defecto para hacer pruebas de manera local
$server="localhost";
$user="root";
//Generalmente aqui es vacia, pero el mio si tiene porque use workbench
$password="1030682619";

//Se genera la conexion al servidor.
$connection= new mysqli($server,$user,$password);
//Si no hay errores, establece la conexion, de otra forma, muestra el error.
if($connection->connect_error){
    die("Connection error: ".$connection->connect_error);
}
echo "Connection stablished";

//La sentencia SQL para crear la base de datos.
$sql="CREATE DATABASE neureka";
//Se realiza la sentencia y se le manda al servidor. Si esta bien, crea la base de datos.
//Si no, te arroja un error.
if($connection->query($sql)===TRUE){
    echo "Created Database";
}
else{
    echo "Database creation error ".$connection->error;
}
?>