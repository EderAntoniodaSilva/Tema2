
<?php
// Using Awesome https://github.com/PHPMailer/PHPMailer
echo "Testando envio de e-mail";
require 'PHPMailer-master/PHPMailerAutoload.php';

// As 3 linhas abaixo são para o navegador mostrar o erro.
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
$mail = new PHPMailer;
//echo "$mail";
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'sandbox347e5aef44dd41b188a7e1fbe0097a8a.mailgun.org'; // SMTP username
$mail->Password = '0462be14876d142168cc5b40c128bf4e '; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable encryption, only 'tls' is accepted

$mail->From = 'postmaster@sandbox347e5aef44dd41b188a7e1fbe0097a8a.mailgun.org';
$mail->FromName = 'eder';
$mail->addAddress('ederanton@gmail.com'); // Add a recipient

$mail->WordWrap = 50; // Set word wrap to 50 characters

$mail->Subject = 'Hello';
$mail->Body = 'Testing some Mailgun awesomness';

if(!$mail->send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent';
}

/*
mail ("mapaposto@mapaposto.esy.es", "Assunto da Mensagem", "Conteúdo do e-mail",
"From: ederanton@gmail.com");
echo "teste"
*/

?>
