<?php

// Melde alle PHP Fehler (siehe Changelog)
// error_reporting(E_ALL|E_STRICT);
// ini_set('display_errors', 1);

// Wenn Formular verschickt:
if($_POST['mail']){ 
// Mail und Weiterleitung

$name = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailtable = '<table border="0" style="font-size: 13px;">
  <tr style="line-height: 140%;">
    <td colspan="2" style="line-height: 40px;">Das TruckHouse Kontaktformular wurde ausgefüllt und mit folgenden Angaben übermittelt:</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Name:</td>
    <td width="auto" style="color: #000000;">'.$name.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">E-Mail:</td>
    <td width="auto" style="color: #000000;">'.$mail.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Betreff:</td>
    <td width="auto" style="color: #000000;">'.$subject.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Nachricht:</td>
    <td width="auto" style="color: #000000;">'.$message.'</td>
  </tr>
</table>
 
';


require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->From = 'no-reply@truckhouse.de';
$mail->FromName = 'TruckHouse Website';
//$mail->addAddress('info@truckhouse.de', 'TruckHouse Website');    
$mail->addAddress('christoph@intertain.me');    
//$mail->addBCC('christoph@intertain.me');

$mail->isHTML(true); 

$mail->Subject = utf8_decode('Kontaktformular');
$mail->Body    = utf8_decode($mailtable);
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo '<div class="red">Ihre Mitteilung wurde nicht korrekt übermittelt, bitte nehmen Sie telefonisch Kontakt mit uns auf.</div>'; // Message not send
} else {
   echo '<div class="order_submitted"><strong>Vielen Dank für Ihre Mitteilung!</strong><br/><br/>Ihre Nachricht wurde erfolgreich übermittelt und wird nun zeitnah von uns bearbeitet.<br/><br/>Ihr TruckHouse Team</div>'; // Message submitted
}

}
 
?>