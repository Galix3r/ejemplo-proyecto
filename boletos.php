<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="boletos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!--EN LA BARRA SUPERIOR MANDA A LINKS DE PORTADA-->
    <header>
        <div class="logo">
          <a href="paguina principal.html"> <img src="LOGO-CARPETA/logo GALIXERS EN PNG.png" style="height:140px !important;"></a> 
          
        </div>
        <nav>
              <ul> 
                <li><a href="Nosotros.html">Info.programadores</a></li>
                <li><a href="PGM .php">PGM.php</a></li>
                <li><a href="Galeria.php">Galería</a></li>
                <li><a href="https://formsubmit.co/el/jolano">Encuesta de usuario</a></li>
                <li><a href="pulp.php">Diviértete </a></li>
                <li><a href="boletos.php">Entradas</a></li>
                <li><a href="carrito-de-compras-main/index.html">GALIXERS-Store</a></li>
              
              </ul>
        </nav>
     </header>
     <a href="https://ultramusicfestival.com/" target="_blank" class="mb20 iblock">
      </a>
 <!--EN LA BARRA SUPERIOR MANDA A LINKS DE PORTADA-->
   
   <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Variables
            const baseDeDatos = [

                {
                    id: 1,
                    nombre: 'General Admission',
                    precio: 399.95,
                    imagen: 'gen1.webp'
                },
                {
                    id: 2,
                    nombre: 'Vip 3 Day Ticket',
                    precio: 1499.95,
                    imagen: 'gen1.webp'
                },
                {
                    id: 3,
                    nombre: 'Vip 3 Day Ticket',
                    precio: 1249.95,
                    imagen: 'gen1.webp'
                }
                
            ];

            let carrito = [];
            const divisa = '';
            const DOMitems = document.querySelector('#items');
            const DOMcarrito = document.querySelector('#carrito');
            const DOMtotal = document.querySelector('#total');
            const DOMbotonVaciar = document.querySelector('#boton-vaciar');
            const DOMbotonComprar = document.querySelector('#boton-cmprar');
            const miLocalStorage = window.localStorage;

            // Funciones

            /**
            * Dibuja todos los productos a partir de la base de datos. No confundir con el carrito
            */
            function renderizarProductos() {
                baseDeDatos.forEach((info) => {
                    // Estructura
                    const miNodo = document.createElement('div');
                    miNodo.classList.add('card', 'col-sm-4');
                    // Body
                    const miNodoCardBody = document.createElement('div');
                    miNodoCardBody.classList.add('card-body');
                    // Titulo
                    const miNodoTitle = document.createElement('h5');
                    miNodoTitle.classList.add('card-title');
                    miNodoTitle.textContent = info.nombre;
                    // Imagen
                    const miNodoImagen = document.createElement('img');
                    miNodoImagen.classList.add('img-fluid');
                    miNodoImagen.setAttribute('src', info.imagen);
                    // Precio
                    const miNodoPrecio = document.createElement('p');
                    miNodoPrecio.classList.add('card-text');
                    miNodoPrecio.textContent = `${info.precio}${divisa}`;
                    // Boton
                    const miNodoBoton = document.createElement('button');
                    miNodoBoton.classList.add('btn', 'btn-primary');
                    miNodoBoton.textContent = '+';
                    miNodoBoton.setAttribute('marcador', info.id);
                    miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);
                    // Insertamos
                    miNodoCardBody.appendChild(miNodoImagen);
                    miNodoCardBody.appendChild(miNodoTitle);
                    miNodoCardBody.appendChild(miNodoPrecio);
                    miNodoCardBody.appendChild(miNodoBoton);
                    miNodo.appendChild(miNodoCardBody);
                    DOMitems.appendChild(miNodo);
                });
            }

            /**
            * Evento para añadir un producto al carrito de la compra
            */
            function anyadirProductoAlCarrito(evento) {
                // Anyadimos el Nodo a nuestro carrito
                carrito.push(evento.target.getAttribute('marcador'))
                // Actualizamos el carrito
                renderizarCarrito();
                // Actualizamos el LocalStorage
                guardarCarritoEnLocalStorage();
            }

            /**
            * Dibuja todos los productos guardados en el carrito
            */
            function renderizarCarrito() {
                // Vaciamos todo el html
                DOMcarrito.textContent = '';
                // Quitamos los duplicados
                const carritoSinDuplicados = [...new Set(carrito)];
                // Generamos los Nodos a partir de carrito
                carritoSinDuplicados.forEach((item) => {
                    // Obtenemos el item que necesitamos de la variable base de datos
                    const miItem = baseDeDatos.filter((itemBaseDatos) => {
                        // ¿Coincide las id? Solo puede existir un caso
                        return itemBaseDatos.id === parseInt(item);
                    });
                    // Cuenta el número de veces que se repite el producto
                    const numeroUnidadesItem = carrito.reduce((total, itemId) => {
                        // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
                        return itemId === item ? total += 1 : total;
                    }, 0);
                    // Creamos el nodo del item del carrito
                    const miNodo = document.createElement('li');
                    miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
                    miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ${miItem[0].precio}${divisa}`;
                    // Boton de borrar  
                    const miBoton = document.createElement('button');
                    miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                    miBoton.textContent = 'X';
                    miBoton.style.marginLeft = '1rem';
                    miBoton.dataset.item = item;
                    miBoton.addEventListener('click', borrarItemCarrito);
                    // Mezclamos nodos
                    miNodo.appendChild(miBoton);
                    DOMcarrito.appendChild(miNodo);
                });
                // Renderizamos el precio total en el HTM 
                DOMtotal.textContent = calcularTotal();
            }

            /**
            * Evento para borrar un elemento del carrito
            */
            function borrarItemCarrito(evento) {
                // Obtenemos el producto ID que hay en el boton pulsado
                const id = evento.target.dataset.item;
                // Borramos todos los productos
                carrito = carrito.filter((carritoId) => {
                    return carritoId !== id;
                });
                // volvemos a renderizar
                renderizarCarrito();
                // Actualizamos el LocalStorage
                guardarCarritoEnLocalStorage();

            }

            /**
             * Calcula el precio total teniendo en cuenta los productos repetidos
             */
            function calcularTotal() {
                // Recorremos el array del carrito
                return carrito.reduce((total, item) => {
                    // De cada elemento obtenemos su precio
                    const miItem = baseDeDatos.filter((itemBaseDatos) => {
                        return itemBaseDatos.id === parseInt(item);
                    });
                    // Los sumamos al total
                    return total + miItem[0].precio;
                }, 0).toFixed(2);
            }

            /**
            * Varia el carrito y vuelve a dibujarlo
            */
            function vaciarCarrito() {
                // Limpiamos los productos guardados
                carrito = [];
                // Renderizamos los cambios
                renderizarCarrito();
                // Borra LocalStorage
                localStorage.clear();

            }

            function guardarCarritoEnLocalStorage () {
                miLocalStorage.setItem('carrito', JSON.stringify(carrito));
            }

            function cargarCarritoDeLocalStorage () {
                // ¿Existe un carrito previo guardado en LocalStorage?
                if (miLocalStorage.getItem('carrito') !== null) {
                    // Carga la información
                    carrito = JSON.parse(miLocalStorage.getItem('carrito'));
                }
            }

            // Eventos
            DOMbotonVaciar.addEventListener('click', vaciarCarrito);
            
            // Inicio
            cargarCarritoDeLocalStorage();
            renderizarProductos();
            renderizarCarrito();
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-8 row"></main>
            <!-- Carrito -->
            <aside class="col-sm-4">
                <h2>Carrito</h2>
                <!-- Elementos del carrito -->
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
                <p class="text-right">Total: $<span id="total"></span></p>
                <button id="boton-vaciar" class="btn btn-danger">Vaciar</button>
                <a href="./Formulario-compra/index.php"><button id="boton-comprar" class="btn ntn-danger">Comprar</button></a>
            </aside>
        </div>
    </div>
    
</body>
<!--pie de paguina  -->
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
</html>