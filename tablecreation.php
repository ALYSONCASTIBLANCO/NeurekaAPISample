<?php
//Esta instruccion hace que se pueda invocar el archivo de conexion para evitar que se
//haga todo de nuevo.
include "connection.php";

//Esta es la sentencia SQL para crear la tabla de usuarios.
$sql="CREATE TABLE usuarios(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(30) NOT NULL,
    contrasena TEXT NOT NULL,
    nombre VARCHAR(255) NOT NULL
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