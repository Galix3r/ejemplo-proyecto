<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="website icon" type="png" 
     href="../imagenes/Iconos/icons8-gato-50.png">
</head>
<body>
    <style>

     body{
        
        background-image: url(background.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        font-family: 'Times New Roman', Times, serif;
        font-size: medium;
     }
     main{
        width: 90%;
        padding: 20px;
        margin: auto;
       margin-top: 100px; 
     }
     .Error_Mensaje{
        display: flex;
       justify-content: center;
       align-items: center;
       flex-direction: column;
       background: rgb(255, 255, 255);
       height: 330px;
       width: 400px;
       border-radius: 20px;
       padding: 0px 20px;
       border: none;
       overflow: hidden;;
     }
     .boton_aceptar{
        background: #000000;
        border: 5px;
        border-radius: 6px;
        padding: 10px;
       
     }
      a{
        text-decoration: none;
        color:#ffffff;
        display: block;
        margin-bottom: 3px;
      }
     a:hover{
        text-decoration: underline;
     }

    </style>

    <center>
    
        <main>
            <div class="Error_Mensaje">
                <img src="../imagenes/Iconos/IconsConfirm.png" width="70" height="70">
                <h2>Acesso Exitoso</h2>
                <h3>Ingreso exitoso</h3>
                <br>
                <button class="boton_aceptar" type="submit" value="Aceptar"><a href="../index.php
                ">Aceptar</a></button>
                
            </div>
        </main>
      
    </center>

</body>
</html>