<?php
if(isset($_POST['email'])) {

//<bold> Debes editar las próximas dos líneas de código de acuerdo con tus preferencias</bold>
$email_to = "mariano-andres@hotmail.com";
$email_subject = "mariano-andres@hotmail.com";

//<bold> Aquí se deberían validar los datos ingresados por el usuario</bold>
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


//<bold> Ahora se envía el e-mail usando la función mail() de PHP</bold>


$header = "From: mariano-andres@hotmail.com" . "\r\n";
$header = "Reply-to: mariano-andres@hotmail.com" . "\r\n"; // responder a ...
$header = "X-mailer: PHP/" . phpversion();


@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>
