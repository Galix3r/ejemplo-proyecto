<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Administrador</title>
    <link rel="website icon" type="png" 
     href="imagenes/Iconos/icons8-gato-50.png">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel='stylesheet' href='styleAdmi.css'>
</head>
<style>

/* Reset de estilos para asegurar consistencia entre navegadores */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilos generales del cuerpo de la página */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
}

/* Estilos para el contenedor principal del formulario */
.form-box {
    width: 400px;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 50px auto;
}

.form-box h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Estilos para los campos de entrada y etiquetas */
.inputbox {
    position: relative;
    margin-bottom: 20px;
}

.inputbox input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.inputbox label {
    position: absolute;
    top: 10px;
    left: 10px;
    color: #999;
    font-size: 16px;
    pointer-events: none;
    transition: 0.3s;
}

.inputbox input:focus + label,
.inputbox input:not(:placeholder-shown) + label {
    top: -10px;
    font-size: 12px;
    color: #333;
}

/* Estilos para el botón */
button {
    display: block;
    width: 100%;
    padding: 12px;
    border: none;
    background-color: #333;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #555;
}

/* Estilos para el enlace de "Regresar al inicio" */
button a {
    text-decoration: none;
    color: #fff;
}

button a:hover {
    text-decoration: underline;
}
</style>
<body>

<button ><a href="../paguina-principal.php">Regresar al inicio</a></button>
        <section>
            <div class="form-box">
                <div class="form-value">
        
                    <form action="enviar.php" method="post">
                        <h2>Mensajes</h2>
                        <div class="inputbox"> <input id="usuario" name="usuario" type="text" required>
                        <br>
                            <label>usuario</label><br>

                            <br>
                        <div class="inputbox"> <input id="correo" name="correo" type="email" required>
                        <br>
                            <label>Correo</label><br>

                            <br>
                        <div class="inputbox"> <input id="mensaje" name="mensaje" type="text" required>
                        <br>
                            <label>mensaje</label><br>

                        </div>
                        <div class="forget"> <label></label> </div> <button  id="enviar" name="enviar">Ingresar</button>
                     
                    </form>
                   
                </div>
            </div>
        </section> 
        
        </center>
    </body>


</html>