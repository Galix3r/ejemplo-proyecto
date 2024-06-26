<?php
include("conexion.php");
$getmysql = new mysqlcon();
$getconex = $getmysql->conex();

if(isset($_POST['registrar'])){
    $pass = $_POST["pass"];
    $user = $_POST["user"];
    $user = $_POST["correo"];

    $query = "INSERT INTO datos (Contraseña,Usuario,correo) VALUES (?,?)";
    $sentencia=mysqli_prepare($getconex, $query);
    mysqli_stmt_bind_param($sentencia, 'ss',$pass,$user,$correo);
    mysqli_stmt_execute($sentencia);
    $afectado=mysqli_stmt_affected_rows($sentencia);
if ($afectado == 1){
    echo "<script> alert('El usuario [$user] se agrego'); location,href='../form';</script>";
} else{
    echo "<script> alert('El usuario [$user] no se agrego':('); location,href='../ejemplo.php';</script>";
}
mysqli_stmt_close($sentencia);
mysqli_close($getconex);
}

?>