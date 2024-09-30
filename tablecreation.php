<?php
include "connection.php";

$sql="CREATE TABLE usuarios(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(30) NOT NULL,
    contrasena TEXT NOT NULL,
    nombre VARCHAR(255) NOT NULL
    );";
    if($connection->query($sql)==TRUE){
        echo "Created table";
    }
    else{
        echo "Error creating the database ".$connection->error;
    }

?>