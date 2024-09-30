<?php
include "connection.php";

$sql="SELECT * FROM usuarios";
$result=$connection->query($sql);

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
$connection->close();
?>