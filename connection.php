<?php

//Servidor por defecto para hacer pruebas de manera local
$server="localhost";
$user="root";
//Generalmente aqui es vacia, pero el mio si tiene porque use workbench
$password="1030682619";
//Esta instruccion se usa si ya creaste la base de datos, de otra forma, hay que 
//crearla primero.
$db="neureka";
//Se genera la conexion al servidor y base de datos.
$connection= new mysqli($server,$user,$password,$db);
//Si no hay errores, establece la conexion, de otra forma, muestra el error.
if($connection->connect_error){
    die("Connection error: ".$connection->connect_error);
}
echo "Connection stablished";
?>