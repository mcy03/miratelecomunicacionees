<?php
// Variables del formulario
$nombre = $_POST['Nombre'] ?? '';
$apellidos = $_POST['Apellidos'] ?? '';
$email = $_POST['Email'] ?? '';
$telefono = $_POST['Teléfono'] ?? '';
$empresa = $_POST['Empresa'] ?? '';
$cargo = $_POST['Cargo'] ?? '';
$pais = $_POST['País'] ?? '';

$servicio = $_POST['Servicio'] ?? '';
$lab = $_POST['Lab'] ?? '';
$pack_horas = $_POST['Pack de horas'] ?? '';

// Checkbox
$adquirir_con_clc = isset($_POST['Adquirir con CLC']) ? $_POST['Adquirir con CLC'] : 'No especificado';
$notificaciones_entrenamiento = isset($_POST['Notificaciones de entrenamiento']) ? $_POST['Notificaciones de entrenamiento'] : 'No especificado';
$actualizar_oportunidades = isset($_POST['Actualizar oportunidades']) ? $_POST['Actualizar oportunidades'] : 'No especificado';
$consentimiento = isset($_POST['Consentimiento']) ? $_POST['Consentimiento'] : 'No especificado';

// Mensaje de correo electrónico
$subject = 'Nuevo formulario enviado desde mi sitio web';
$message = "Nombre: $nombre\n";
$message .= "Apellidos: $apellidos\n";
$message .= "Email: $email\n";
$message .= "Teléfono: $telefono\n";
$message .= "Empresa: $empresa\n";
$message .= "Cargo: $cargo\n";
$message .= "País: $pais\n\n";

$message .= "Servicio: $servicio\n";
$message .= "Lab: $lab\n";
$message .= "Pack de horas: $pack_horas\n\n";

$message .= "¿Quiero adquirirlo con CLC?: $adquirir_con_clc\n";
$message .= "Notificaciones de entrenamiento: $notificaciones_entrenamiento\n";
$message .= "Actualizar oportunidades: $actualizar_oportunidades\n";
$message .= "Consentimiento: $consentimiento\n";

// Email de destino
$to = 'manuelcaler2003@gmail.com';

// Cabeceras del correo
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envío del correo usando SMTP
ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587);

// Datos de autenticación SMTP (necesarios si se requiere autenticación)
$smtpUsername = 'tu_correo@gmail.com';
$smtpPassword = 'tu_contraseña';

// Envío del correo usando la función mail de PHP
$mail_sent = mail($to, $subject, $message, $headers);

// Verificar si el correo fue enviado correctamente
if ($mail_sent) {
    echo '<p style="color: green;">Gracias por enviar el formulario. Nos pondremos en contacto pronto.</p>';
} else {
    echo '<p style="color: red;">Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo más tarde.</p>';
}
?>
