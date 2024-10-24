<?php 
$Servidor ="localhost";
$UsuarioBd ="root";
$Passwordb ="";
$Bd ="motos";
$Conecta = new mysqli($Servidor,$UsuarioBd,$Passwordb,$Bd);
if($Conecta->connect_error){
    die("conexion sin exito".$Conecta->connect_error);

 }

?>