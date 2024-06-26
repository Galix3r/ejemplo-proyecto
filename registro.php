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
        <form method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellidos">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="enviar" value="Iniciar Cesión"> 
        </form>
    </div>
    <div class="users-form">
        <form action="insert_user2.php" method="POST">
        
            <input type="submit" value="ya tengo cuenta">
        </form>
    </div>

    <?php
        include('insert_user.php');
    ?>
  
</body>

</html>