<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Users formulario</title>
</head>


        <nav>
              <ul>
                
                
              <li><a href="paguina-principal.php">Inicio</a></li>
                <li><a href="ya tengo cuenta.php">iniciar Cesión</a></li>
                <li><a href="PGM .php">PGM.php</a></li>
                <li><a href="Galeria.php">Galería</a></li>
                <li><a href="https://formsubmit.co/el/jolano">Encuesta de usuario</a></li>
                <li><a href="pulp.php">Diviértete </a></li>
                <li><a href="boletos.php">Entradas</a></li>
                <li><a href="carrito-de-compras-main/carrito-de-compras-main/">GALIXERS-Store</a></li>
              
              </ul>
        </nav>
   
     <style>
/*LETRAS PARA QUE MANDEN A UN LINK*/
p{
    color: white;


}
ul{
   
    background-position: center center;
}
li{
    display: inline-block;
    padding: 0px 20px;
    background-position: center center;
}
a{
    color: black;
    text-decoration: none;
}
a:hover{
    color: aqua;
}</style>
<body>
    <div class="users-form">
        <h1>Crear un usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellidos">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="email" name="email" placeholder="Email">

            <input type="submit" value="Agregar">
        </form>
    </div>

  
</body>

</html>