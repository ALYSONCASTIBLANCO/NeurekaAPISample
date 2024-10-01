<?php
//Esta instruccion hace que se pueda invocar el archivo de conexion para evitar que se
//haga todo de nuevo.
include "connection.php";
//Esta es la sentencia SQL para crear la tabla de retos.
$sql="CREATE TABLE retos(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    enunciado TEXT NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    opcion1 VARCHAR(255) NOT NULL,
    opcion2 VARCHAR(255) NOT NULL,
    opcion3 VARCHAR(255) NOT NULL,
    opcion4 VARCHAR(255) NOT NULL,
    correcta VARCHAR (255) NOT NULL
    );";
//Se envia la query al servidor, en caso de que si se acepte, te arroja un mensaje de creacion de
//tabla. Si no, te arroja un error.
    if($connection->query($sql)==TRUE){
        echo "Created table";
    }
    else{
        echo "Error creating the database ".$connection->error;
    }

?>