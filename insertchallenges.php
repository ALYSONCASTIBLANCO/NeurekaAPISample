<?php
//Esta instruccion hace que se pueda invocar el archivo de conexion para evitar que se
//haga todo de nuevo.
include "connection.php";
//Esta es la sentencia SQL para crear el registro en la tabla de retos. Aqui vamos a hacer algunas
//aclaraciones: todos los datos se toman de la base de datos de Bebras de pensamiento computacional
//se tradujeron los retos, y las imagenes se insertaron con el link hacia donde se almacenan las
//imagenes en la carpeta del frontend, en lugar de insertarlas directamente en la base de datos.
//Cuando se invoque la imagen, se invoca la ruta y el frontend la busca en la carpeta de imagenes
//correspondiente.

//Se hacen las queries colectivas de este modo. Es la manera clasica, pero cuando se cree el
//administrador, se cambiara a traves de hacer la senetencia con el comando prepare.

$sql="INSERT INTO retos (id, nombre, enunciado, imagen, opcion1, opcion2, opcion3, opcion4, correcta)
VALUES (NULL, 'Perlas','Monica y Michael crearon collares para su regreso de vacaciones 
(tienes que ver la primera imagen para entender el patron). Cada uno de ellos tomo varias perlas
de su propio collar para hacer uno nuevo para su amiga Anastasia. Ahora,sus collares lucen asi: ¿Cual
es el collar de Anastasia?', './Challenges_Images/Challenge1_image1.1.png', './Challenges_Images/Challenge1_imageopc1.png',
'./Challenges_Images/Challenge1_imageopc2.png', './Challenges_Images/Challenge1_imageopc3.png', './Challenges_Images/Challenge1_imageopc4.png', 
'A');";
/*
$sql.="INSERT INTO retos (id, nombre, enunciado, imagen, opcion1, opcion2, opcion3, opcion4, correcta)
VALUES (NULL, 'Carta de amistad','Dai recibio un dibujo de un corazón como un regalo secreto. Debio ser enviado por
alguno de sus cuatro amigos: David, John, Robert o James: Cada uno de ellos dijo: David dijo: John envio el dibujo; John dijo: El regalo es
de James; Robert dijo: Yo nunca envie nada; James dijo: John miente. Es un hábito de los amigos de Dai que solo uno dice la verdad. ¿Quien envió el dibujo?','./Challenges_Images/Challenge2_image1.1.png','John', 'David', 'James', 'Robert',
'Robert');";
*/

//Si se desean insertar varios retos, usar la instruccion multi_query
if($connection->query($sql)==TRUE){
    echo "Challenges Registered";
}
else{
    echo "Challenge creation error ".$connection->error;
}
$connection->close();
?>