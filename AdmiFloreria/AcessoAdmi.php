<?php
// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'users_crud_php');
// Iniciar sesión
session_start();

 
  $username =  $_POST['correo'];
  $clave =  $_POST['password'];
 
  $query=("SELECT * FROM oscar WHERE 	correo='$username' AND password='$clave' ");

  
  $consulta = mysqli_query ($conexion, $query);
  $cantidad = mysqli_num_rows($consulta);

   if($cantidad >0){
  
    header ("location: AdmiAcesso.php");

}
   
   else{
    header("location: AdmiError.php");   
   }
?>