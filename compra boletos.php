<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"

    <title></title>
</head>
<body>
     <!--EN LA BARRA SUPERIOR MANDA A LINKS DE PORTADA-->
     <header>
        <div class="logo">
          <a href="paguina principal.html"> <img src="LOGO-CARPETA/logo GALIXERS EN PNG.png" style="height:124px !important;"></a> 
          
        </div>
        <nav>
              <ul>
                <li><a href="paguina principal.html">Inicio</a></li>  
                <li><a href="calendario.html">Cartel</a></li>
                <li><a href="galeria de imagenes/Galeria.html">Galería</a></li>
                <li><a href="compra boletos.html">Registrarse</a></li>
                <li><a href="pie de pagina/pulp.html">Diviértete </a></li>
                <li><a href="boletos/boletos.html">Entradas</a></li>
              
              </ul>
        </nav>
     </header>
     <a href="https://ultramusicfestival.com/" target="_blank" class="mb20 iblock">
      </a>
 <!--EN LA BARRA SUPERIOR MANDA A LINKS DE PORTADA-->
    <section class="form-register">
      <center><h4>Iniciar sesión</h4></center>  
    <input class="controls"  type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls"  type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus Apellidos">
    <input class="controls"  type="email" name="Correo" id="Correo" placeholder="Ingrese su Correo">
    <input class="controls"  type="password" name="nombres" id="correo" placeholder="Ingrese su Contraseña">
    <input class="controls"  type="text" name="calle" id="calle" placeholder=" Ingrese su calle">
    <input class="controls"  type="text" name="colonia" id="colonia" placeholder=" Ingrese su colonia">
    <input class="controls"  type="text" name="postal" id="postal" placeholder=" Ingrese su código postal">
   
   

<p>  <a href="#">Términos y Condiciones</a></p>



<p> <a href="#">¿Ya tengo Cuenta? </a></p>

<center>
  <a href="paguina principal.html"><input class="botons"  type="submit" value="Iniciar sesión"></a>
</center>
    </section>
    
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
    color: white;
    text-decoration: none;
}
a:hover{
    color: aqua;
}
/*LETRAS PARA QUE MANDEN A UN LINK*/
.logo img{
    height: 30px;
}
.logo{
    display: flex;
}
header{
    display: flex;
    height: 70px;
    background-color: black;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.form-register {
    width: 400px;
    background: #24303c;
    padding: 30px;
    margin:auto; 
    margin-top: 100px;
    border-radius: 4px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: white;
    box-shadow: 7px  13px 37px #000;
}

.form-register h4 {
    font-size: 22px;
    margin-bottom: 20px;

}

.controls {
    width: 100%;
    background: #24303c;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border: 1px solid #1f53c5;
    font-family: "calibri";
    font-size: 18px;
    color: white;
}

.form-register p {
    line-height: 40px;
height: 40px;
text-align: center;
font-size: 18px;
}


.form-register a {
    color: white;
    text-decoration: none;
}

.form-register a:hover {
    color: white;
    text-decoration: underline;
}

.form-register botons {
    width: 100%;
    background: #1f53c5;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;


}
    </style>
</body>
   <!--pie de paguina  -->
   <style>
    footer {
  background-color: #000000;
  color: #fff;
  padding: 50px 0;
  }
  
  .container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  }
  
  .footer-content {
  flex: 1;
  }
  
  .footer-content h3 {
  margin-bottom: 20px;
  }
  
  .footer-content p {
  margin-bottom: 10px;
  }
  
  .footer-content ul {
  list-style: none;
  padding: 0;
  }
  
  .footer-content ul li {
  margin-bottom: 5px;
  }
  
  .footer-content ul li a {
  color: #fff;
  text-decoration: none;
  }
  
  .footer-content ul li a:hover {
  text-decoration: underline;
  }
  
  .footer-content ul li img {
  width: 30px;
  height: 30px;
  margin-right: 10px;
  }
  .social-icons {
  display: flex;
  gap: 1rem;
  }
  
  .social-icons span {
  
  border-radius: 50%;
  width: 3rem;
  height: 3rem;
  
  display: flex;
  align-items: center;
  justify-content: center;
  }
  
  .social-icons span i {
  color: #f9f5f5;
  font-size: 2rem;
  }
  
  .facebook {
  background-color: #3b5998;
  }
  
  .twitter {
  background-color: #00acee;
  }
  
  .youtube {
  background-color: #c4302b;
  }
  
  .pinterest {
  background-color: #c8232c;
  }
  
  .instagram {
  background: linear-gradient(
  #405de6,
  #833ab4,
  #c13584,
  #e1306c,
  #fd1d1d,
  #f56040,
  #fcaf45
  );
  }
  </style>
  
  </body>
  <center>
  <footer>
  <div class="container">
  <div class="footer-content">
    <h3>Contacto</h3>
    <p>Correo: Unite7lives@gmail.com</p>
    <p>Teléfono: 773-189-7998</p>
  </div>
  <div class="footer-content">
    <h3>Enlaces</h3>
    <ul>
      <li><a href="paguina principal.html">Inicio</a></li>
      <li><a href="Nosotros.html">Acerca de</a></li>
      <li><a href="Contacto.html">Contacto</a></li>
    </ul>
  </div>
  <div class="footer-content">
    <h3>Redes Sociales</h3>
    <ul>
      <div class="social-icons">
        <span class="facebook">
          <a href="https://www.facebook.com/people/Organizador-De-Bodas/pfbid0iCHcwzGdwAKHoXkPYyQBpVUbPXXvz2oBt1oKHbDgharPVJkAnRYjZ4TpTpYoCNAgl/?mibextid=qi2Omg"><i class=""></i></a>
        </span>
        <span class="twitter">
          <a href="https://twitter.com/?lang=es"><i class="fa-brands fa-twitter"></i></a>
        </span>
        <span class="youtube">
          <a href="https://www.youtube.com/@EricaHernandezQuijano"><i class="fa-brands fa-youtube"></i></a>
        </span>
        <span class="pinterest">
          <a href="https://pin.it/5nUa46605"><i class="fa-brands fa-pinterest-p"></i></a>
        </span>
        <span class="instagram">
          <a href="https://www.instagram.com/eka_hrdz?igsh=dm4ybDhjM3J2NGph"><i class="fa-brands fa-instagram"></i></a>
        </span>
      </div>
    </div>
    </ul>
  </div>
  </div>
  
  <div class="polilinea">
  <div class="punto"></div>
  
  </div>
  
  
  <p style="text-align: center;">&copy; 2024 ||  Ángel y America. Todos los derechos reservados.</p>
  </footer>
</center>
</html>