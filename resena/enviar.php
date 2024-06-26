<?php
// Conectar a la base de datos
include("connection.php");
$con = connection();

// Verificar si se reciben los datos del formulario
if(isset($_POST['correo']) && isset($_POST['usuario']) && isset($_POST['mensaje'])) {
    
    // Escapar las variables para prevenir inyección SQL
    $correo = mysqli_real_escape_string($con, $_POST['correo']);
    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $mensaje = mysqli_real_escape_string($con, $_POST['mensaje']);
    
    // Preparar la consulta SQL (asegúrate de que los nombres de columna sean correctos)
    $sql = "INSERT INTO formulario (correo, usuario, mensaje) VALUES ('$correo', '$usuario', '$mensaje')";
    
    // Ejecutar la consulta
    $query = mysqli_query($con, $sql);
    
    // Verificar si la consulta fue exitosa
    if($query) {
        header("Location: formulario.php"); // Redirigir a otra página después de la inserción exitosa
        exit(); // Terminar el script después de la redirección
    } else {
        // Manejar el caso de consulta fallida si es necesario
        echo "Error al ejecutar la consulta: " . mysqli_error($con);
    }
    
} else {
    // Manejar el caso de que no se recibieron todos los datos esperados del formulario
    echo "No se recibieron todos los datos del formulario.";
}

?>
