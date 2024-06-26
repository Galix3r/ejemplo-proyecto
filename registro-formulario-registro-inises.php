<?php
/*
    Autor: Santiago Nicolás De la mora Núñez
    Descripción: Archivo que se encarga de enviar los datos del formulario a la base de datos
    Fecha: 10/6/2024
*/

// Mostrar errores de PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configurar el contenido para que sea JSON
header('Content-Type: application/json');

// Conexión con el archivo que crea la conexión con la base de datos
include("conexion.php");

// Arreglo de pares clave-valor que permite enviar mensajes al cliente
$respuestaServidor = ['estado' => 'error', 'mensaje' => '', 'cuentaEncontrada' => null, 'contraseniaCorrecta' => null, 'redireccionamiento' => ''];

// Condicional que verifica que se haya hecho click en los botones que envían el formulario
if (isset($_POST['enviar']))
{
    if (strlen($_POST['nombreUsuario']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contrasenia']) >= 1)
    {
        // Se extraen los valores de los campos del formulario
        $nombreUsuario = trim($_POST['nombreUsuario']);
        $correo = trim($_POST['correo']);
        $contrasenia = trim($_POST['contrasenia']);
        $fecha = date("Y-m-d H:i:s");

        // Crea la consulta SQL pero se sustiyuen los valores por signos de interrogación
        $sql = "INSERT INTO registro_usuario (Nombre_de_usuario, Correo, Contraseña, Fecha) VALUES (?, ?, ?, ?)";

        // Se prepara la consulta creada anteriormente
        $consultaPreparada = $conexion -> prepare($sql);

        // Condicional qeu manda un mensaje de error en caso de que haya un error en la preparación de la consulta
        if ($consultaPreparada === false)
        {
            // Se almacena el mensaje en el arreglo de pares clave-valor para después convertirlo en un archivo JSON y enviarlo al cliente
            $respuestaServidor['mensaje'] = 'Error en la preparacion de la consulta: ' . $conexion -> error;
            echo json_encode($respuestaServidor);
            exit;
        }

        // Se sustituyen los signos de interrogación de la consulta por los valores
        $consultaPreparada -> bind_param('ssss', $nombreUsuario, $correo, $contrasenia, $fecha);

        // Se ejecuta la consulta preparada y se almacena su valor
        $resultado = $consultaPreparada -> execute();

        // Condicional que verifica que la ejecución de la consulta se haya realizado exitosamente y se almacenan los mensajes en el arreglo de pares clave-valor
        if ($resultado === true)
        {
            $respuestaServidor['estado'] = 'exito';
            $respuestaServidor['mensaje'] = 'Registro exitoso. Ahora inicie sesión con su cuenta';
        }
        else
        {
            $respuestaServidor['mensaje'] = 'Error en el registro: ' . $consultaPreparada -> error;
        }

        // Se cierra la consulta preparada
        $consultaPreparada -> close();
    }
}
else if (isset($_POST['enviar2']))
{
    if (strlen($_POST['correo2']) >= 1 && strlen($_POST['contrasenia2']) >= 1)
    {
        // Se extraern los valores de los campos del formulario
        $correo = trim($_POST['correo2']);
        $contrasenia = trim($_POST['contrasenia2']);
        $fecha = date("Y-m-d H:i:s");

        // Crea la consulta SQL pero se sustiyuen los valores por signos de interrogación
        $sql = "SELECT * FROM registro_usuario WHERE Correo = ?";

        // Prepara la consulta creada anteriormente
        $consultaPreparada = $conexion -> prepare($sql);

        // Condicional que verifica que la consulta se haya preparado exitosamente
        if ($consultaPreparada === false)
        {
            // Se almacenan los mensajes en el arreglo de pares clave-valor para después enviarlos al cliente mediante formato JSON
            $respuestaServidor['mensaje'] = 'Error en la preparacion de la consulta: ' . $conexion -> error;
            echo json_encode($respuestaServidor);
            exit;
        }

        // Se sustituyen los signos de interrogación en la consulta para sustituirlos por los valores
        $consultaPreparada -> bind_param('s', $correo);

        // Se ejecuta la consulta
        $consultaPreparada -> execute();

        // Se obtiene el resultado de la ejecución de la consulta preparada y se almacena en una variable
        $resultado = $consultaPreparada -> get_result();

        // Condicional que verifica que hayan coincidencias entre los datos ingresados y los registros en la tabla de la base de datos
        if ($resultado -> num_rows == 0)
        {
            // Si no se encuentra ninguna coincidencia se envía un mensaje de error mediante formato JSON al cliente
            $respuestaServidor['mensaje'] = 'La cuenta no existe. Cree una cuenta para poder iniciar sesión.';
            $respuestaServidor['cuentaEncontrada'] = false;
        }
        // Si se encuentran coincidencias se almacenan los datos en otra base de datos
        else
        {
            // Se almacena el contenido de la fila en una variable
            $fila = $resultado -> fetch_assoc();

            // Si el correo existe, verifica que la contraseña sea diferente a la contraseña real
            if ($fila['Contraseña'] !== $contrasenia)            
            {
                // Si la contrasenña no coincide se envía un mensaje al usuario y se le colocan los valores las claves "cuentaEncontrada" y "contraseniaCorrecta" para validar el mensaje del lado del cliente
                $respuestaServidor['mensaje'] = 'La contraseña es incorrecta.';
                $respuestaServidor['cuentaEncontrada'] = true;
                $respuestaServidor['contraseniaCorrecta'] = false;
            }
            else
            {
                // Si la contraseña si coincide con la que está almacenada en la base de datos, se registra el incio de sesión en la base de datos
                // Cierra la consulta anterior
                $consultaPreparada -> close();

                // Sobreescribe el valor de la clave 'cuentaEncontrada' a true para indicar que se ha encontrado una cuenta y validar del lado del cliente
                $respuestaServidor['cuentaEncontrada'] = true;

                // Sobreescribe el valor de la clave 'contraseniaCorrecta' a true para indicar que la contraseña es correcta y validar del lado del cliente
                $respuestaServidor['contraseniaCorrecta'] = true;

                // Crea una consulta SQL pero se sustituyen los valores por signos de interrogación
                $sql = "INSERT INTO inicio_sesion (Correo, Contraseña, Fecha) VALUES (?, ?, ?)";

                // Se prepara la consulta creada anteriormente
                $consultaPreparada = $conexion -> prepare($sql);

                // Condicional que verifica que la consulta se haya realizado correctamente
                if ($consultaPreparada === false)
                {
                    // Se almacena el mensaje en el arreglo de pares clave-valor para después enviar el mensaje mediante formato JSON al cliente
                    $respuestaServidor['mensaje'] = 'Error en la preparacion de la consulta: ' . $conexion -> error;
                    echo json_encode($respuestaServidor);
                    exit;
                }

                // Se sustituyen los signos de interrogación por los valores
                $consultaPreparada -> bind_param("sss", $correo, $contrasenia, $fecha);

                // Se ejecuta la consulta preparada y se almacena el resultado en una variable
                $resultado = $consultaPreparada -> execute();

                // Condicional que verifica que la consulta se haya ejecutado correctamente y se almacenan los resultados en el arreglo de pares clave-valor
                if ($resultado === true)
                {
                    $respuestaServidor['estado'] = 'exito';
                    $respuestaServidor['mensaje'] = 'Inicio de sesion registrado.';
                    $respuestaServidor['redireccionamiento'] = 'http://localhost/TRABAJOS/PROYECTO-SITIO-WEB/views/index.html';
                }
                else
                {
                    $respuestaServidor['mensaje'] = 'Error en el inicio de sesion: ' . $consultaPreparada -> error;
                }

                // Se cierra la consulta preparada
                $consultaPreparada -> close();
            }
        }
    }
}
else
{
    $respuestaServidor['mensaje'] = 'No se ha enviado ningun formulario.';
}

// El arreglo de pares clave-valor codifica en formato JSON para despues enviarlo al cliente
echo json_encode($respuestaServidor);