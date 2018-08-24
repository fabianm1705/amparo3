<?php
if(isset($_POST['email'])) {

    // Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados

    $email_to = "
 amparoserviciossociales@gmail.com";

    $email_subject = "Tu Asunto de correo";

    function died($error) {

        // si hay algún error, el formulario puede desplegar su mensaje de aviso

        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";

        echo "Detalle de los errores.<br /><br />";

        echo $error."<br /><br />";

        echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
        die();
    }

    // Se valida que los campos del formulairo estén llenos

    if(!isset($_POST['nombre']) ||

        !isset($_POST['telefono']) ||

        !isset($_POST['domicilio']) ||

        !isset($_POST['correo']) ||

        !isset($_POST['mensaje'])) {

        died('Lo sentimos pero parece haber un problema con los datos enviados.');

    }
 //En esta parte el valor "name" nos sirve para crear las variables que recolectaran la información de cada campo

    $name = $_POST['nombre']; // requerido

    $telefono = $_POST['telefono']; // no requerido

    $domicilio = $_POST['domicilio']; // no requerido

    $correo = $_POST['correo']; // no requerido

    $mensaje = $_POST['mensaje']; // requerido

    $error_message = "Error";

//En esta parte se verifica que la dirección de correo sea válida

//   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

//  if(!preg_match($email_exp,$email_from)) {

//    $error_message .= 'La dirección de correo proporcionada no es válida.<br />';

//  }

//En esta parte se validan las cadenas de texto

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$name)) {

    $error_message .= 'El formato del nombre no es válido<br />';

  }

  if(strlen($mensaje) < 2) {

    $error_message .= 'El formato del texto no es válido.<br />';

  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

//A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo

    $email_message = "Contenido del Mensaje.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Nombre: ".clean_string($name)."\n";

    $email_message .= "Teléfono: ".clean_string($telefono)."\n";

    $email_message .= "Domicilio: ".clean_string($domicilio)."\n";

    $email_message .= "Email: ".clean_string($correo)."\n";

    $email_message .= "Mensaje: ".clean_string($mensaje)."\n";


//Se crean los encabezados del correo

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);

?>



<!-- incluye aqui tu propio mensaje de Éxito-->

Gracias! Nos pondremos en contacto contigo a la brevedad


<?php

}

?>
