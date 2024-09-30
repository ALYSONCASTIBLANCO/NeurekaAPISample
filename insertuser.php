<?php
include "connection.php";

//Contrasena admin: admin123
//Contrasena Tutor: tutor123
//Contrasena Estudiante: estudiante123
//Contrasena Test User: test123
$contrasena_admin=password_hash('test123', PASSWORD_DEFAULT);
$sql="INSERT INTO usuarios (id, usuario, contrasena, nombre)
VALUES (NULL, 'Estudiante_Prueba','$contrasena_admin', 'Neureka Test Student')";

if($connection->query($sql)===TRUE){
    echo "User Registered";
}
else{
    echo "User creation error ".$connection->error;
}
$connection->close();
?>