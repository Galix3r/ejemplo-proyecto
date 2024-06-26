<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago JM</title>
    <link rel="website icon" type="png" 
     href="../imagen/icons8-gato-50.png">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

    <form method="post" autocomplete="off">

        <div class="row">

            <div class="col">

                <h3 class="title">Datos de Compra</h3>

                <div class="inputBox">
                    <span>Nombre Completo :</span>
                    <input type="text" id="Nombre"  name="Nombre" placeholder="">
                </div>
                <div class="inputBox">
                    <span>Correo Elecronico :</span>
                    <input type="email" id="Correo"  name="Correo" placeholder="">
                </div>
                <div class="inputBox">
                    <span>Dirección :</span>
                    <input type="text" id="Direccion"  name="Direccion" placeholder="Calle, Número">
                </div>
                <div class="inputBox">
                    <span>Municipio :</span>
                    <input type="text" id="Ciudad"  name="Ciudad" placeholder="">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Estado :</span>
                        <input type="text" id="Estado"  name="Estado" placeholder="">
                    </div>
                    <div class="inputBox">
                        <span>Código Postal :</span>
                        <input type="text" id="CP"  name="CP"  placeholder="">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Pago</h3>

                <div class="inputBox">
                   <!-- <span>Tarjetas Aceptadas :</span>
                    <img src="images/card_img.png" alt=""-->
                </div>
                <div class="inputBox">
                    <span>Nombre del propietario :</span>
                    <input type="text" id="NomTarjeta"  name="NomTarjeta" placeholder="">
                </div>
                <div class="inputBox">
                    <span>Número De Tarjeta :</span>
                    <input type="number" id="NumTarjeta"  name="NumTarjeta" placeholder="0000-0000-0000-0000">
                </div>
                <div class="inputBox">
                    <span>Mes Expiración :</span>
                    <input type="text" id="Mes"  name="Mes" placeholder="Marzo">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Año Expiración:</span>
                        <input type="number" id="Año"  name="Año" placeholder="2026">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" id="CVV"  name="CVV" placeholder="000">
                    </div>
                </div>

            </div>
    
        </div>
        <button type="submit" id="enviar" name="enviar"  class="submit-btn">Confirmar Pago</button>
      
        <button class="botonregreso"><a href="../paguina-principal.php">Regresar al Inicio</a></button>
    </form>
</div> 


  <!--Conexión con el archivo de PHP-->
  <?php 
  include("RegistroCompra.php");
?>   

</body>
</html>