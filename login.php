<?php

require_once 'conexion.php';

$sql="SELECT * FROM USUARIOS WHERE USUARIO= :usuario AND CONTRASENA=:contrasena";
$resultado=$base->prepare($sql);
$usuario=htmlentities(addslashes($_POST["usuario"]));
$contrasena=htmlentities(addslashes($_POST["contrasena"]));

$resultado->bindValue(":usuario",$usuario);
$resultado->bindValue(":contrasena",$contrasena);
$resultado->execute();

$numero_registro=$resultado->rowCount();

if($numero_registro !=0){
    header("Location: zona_registrados.php");

} else{
    echo"CONTRASEÑA INCORRECTA";
   
}
?>