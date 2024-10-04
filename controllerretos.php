<?php
    if(!empty($_POST["jugar"])){
        $reto_id=$_POST["retos"];
        header("location:Retos.php?id=$reto_id");
    }

?>
