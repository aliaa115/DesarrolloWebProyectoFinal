<?php
include('../html/header_inicio.html');
?>
<?php
include('../html/contacto.html');
?>
<?php
$remitente = $_POST['email'];
$destinatario = 'mail@dominio.com'; // en esta línea va el mail del destinatario.
$asunto = 'text'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre: " . $_POST["name"] . "\r\n"; 
    $cuerpo .= "Correo Electronico: " . $_POST["email"] . "\r\n";
    $cuerpo = "Asunto: " . $_POST["subject"] . "\r\n"; 
    $cuerpo .= "Número de Teléfono: " . $_POST["phone"] . "\r\n";
	$cuerpo .= "¿Cómo podemos ayudarte?: " . $_POST["text"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['subject']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
}
?>

<?php
include('../html/footer.html');
?>