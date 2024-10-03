<?php
    if(!empty($_POST["ingresobtn"])){
        //echo "Usuario: ".$_POST["usuario"]." Contrasena: ".$_POST["contrasena"];
       // echo isset($_POST["usuario"])." ".isset($_POST["contrasena"]);
        if ((($_POST['usuario'])==null) or (($_POST['contrasena'])==null)) {
            echo '<div class="alert alert-danger">Verifique los campos vacios</div>';
        } else {
            $usuario=$_POST["usuario"];
            $contrasena=$_POST["contrasena"];
            $sql=$connection->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
            if($sql->num_rows>0){
                while($fila=$sql->fetch_assoc()){
                    if(password_verify($contrasena, $fila["contrasena"])){
                        header("location:inicio.php");
                    }
                    else{
                        echo "Acceso Denegado";
                    }   
                }   
            }
            else{
                echo "Acceso Denegado";
            }          
        }        
    }
?>