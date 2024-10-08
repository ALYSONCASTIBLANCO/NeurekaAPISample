<?php
//Esta instruccion hace que se pueda invocar el archivo de conexion para evitar que se
//haga todo de nuevo.
include "connection.php";

//La sentencia SQL para consultar todos los datos
//que contiene la tabla usuarios.
$sql="SELECT * FROM usuarios";
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
        echo "id: ".$fila['id']." user: ". $fila['usuario']." contrasena: ". $fila['contrasena']." nombre: ".$fila['nombre']."<br>";
    }
}
else{
    echo "NO USERS ".$connection->error;
}

//Debe cerrarse la conexion para evitar conflictos
//en los puertos.
$connection->close();
?>