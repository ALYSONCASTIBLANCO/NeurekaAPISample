<?php
//Esta instruccion hace que se pueda invocar el archivo de conexion para evitar que se
//haga todo de nuevo.
include "connection.php";

//Contrasena admin: admin123
//Contrasena Tutor: tutor123
//Contrasena Estudiante: estudiante123
//Contrasena Test User: test123

//Antes de insertar la contrasena en la base de datos, si se inserta el texto directo, es muy
//inseguro, por eso, debe encriptarse con esta sentencia y una vez se encripta, si se inserta
//a la base de datos. Con el hash, se encripta diez veces para que sea una cadena segura.
$contrasena_admin=password_hash('test123', PASSWORD_DEFAULT);
//Esta es la sentencia SQL para crear el registro en la tabla de usuarios. Se inserta la contrasena encriptada.
$sql="INSERT INTO usuarios (id, usuario, contrasena, nombre)
VALUES (NULL, 'Estudiante_Prueba','$contrasena_admin', 'Neureka Test Student')";
//Se envia la query al servidor, en caso de que si se acepte, te arroja un mensaje de creacion de
//registro. Si no, te arroja un error.
if($connection->query($sql)===TRUE){
    echo "User Registered";
}
else{
    echo "User creation error ".$connection->error;
}
$connection->close();
?>