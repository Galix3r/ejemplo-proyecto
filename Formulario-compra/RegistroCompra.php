
<?php
// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'users_crud_php');

    if(isset($_POST['enviar'])){

        $nombreUsuario = $_POST['Nombre']  ;
        $Correo =  $_POST['Correo'] ;
        $Direccion = $_POST['Direccion'] ;
        $Ciudad = $_POST['Ciudad'] ;
        $Estado = $_POST['Estado'] ;
        $CP = $_POST['CP'] ;
        $Nomtar = $_POST['NomTarjeta'] ;
        $Numtar = $_POST['NumTarjeta'] ;
        $mes = $_POST ['Mes'] ;
        $ass =  $_POST['Año'] ;
        $cvv = $_POST['CVV'];
        
         // Insertar los datos en la tabla "usuarios"
        $sql = "INSERT INTO registrotarjetas (Nombre, Correo, Direccion, Ciudad, Estado, CP, NomTarjeta, NumTarjeta ,Mes, Año, CVV) 
        VALUES ('$nombreUsuario','$Correo','$Direccion','$Ciudad','$Estado','$CP','$Nomtar','$Numtar','$mes','$ass','$cvv')";
        
        
        $ejecutar = mysqli_query($conexion, $sql);
        
        if(!$ejecutar){
            
             
        }else{
          
            header("location: ../Confirmacion.html");   
           
        }
         
       
    } else{

    }
       
        
?>