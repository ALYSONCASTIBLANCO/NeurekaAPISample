<?php
//Esta instruccion hace que se pueda invocar el archivo de conexion para evitar que se
//haga todo de nuevo.
include "connection.php";
//La sentencia SQL para tomar todos los datos del
//registro con id 2.
$sql="SELECT * FROM retos WHERE id=2";
//Se le realiza la query al servidor, y el arroja
//los datos y los guarda en esta variable.
$result=$connection->query($sql);
//Si el sistema encuentra que tiene filas, es decir,
//que hay registros y procede a mostrarlos, de lo contrario,
//Arroja que no hay datos.

if($result->num_rows>0){
    echo "Found registers ";
    while($fila=$result->fetch_assoc()){
        //print_r($fila);
        echo "id: ".$fila['id']." Reto: ". $fila['nombre']." Enunciado: ". $fila['enunciado']." Imagen: ".$fila['imagen']."Opcion 1: ".$fila['opcion1'].
        "Opcion 2: ".$fila['opcion2']."Opcion 3: ".$fila['opcion3']."Opcion 4: ".$fila['opcion4']."Respuesta: ".$fila['correcta']."<br>";
    }
}
else{
    echo "NO USERS ".$connection->error;
}
//Debe cerrarse la conexion para evitar conflictos
//en los puertos.
$connection->close();
?>