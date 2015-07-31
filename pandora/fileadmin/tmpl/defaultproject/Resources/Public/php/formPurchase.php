<?php

// Melde alle PHP Fehler (siehe Changelog)
// error_reporting(E_ALL|E_STRICT);
// ini_set('display_errors', 1);

// Wenn Formular verschickt:
if($_POST['mail']){ 
// Mail und Weiterleitung

$company = $_POST['company'];
$contactname = $_POST['contactname'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$vehicletype = $_POST['vehicletype'];
$fabricator = $_POST['fabricator'];
$type = $_POST['type'];
$registrationdate = $_POST['registrationdate'];
$vehiclebody = $_POST['vehiclebody'];
$extras = $_POST['extras'];
$milage = $_POST['milage'];
$askingprice = $_POST['askingprice'];
$comment = $_POST['comment'];


$mailtable = '<table border="0" style="font-size: 13px;">
  <tr style="line-height: 140%;">
    <td colspan="2" style="line-height: 40px;">Das TruckHouse Ankaufsformular wurde ausgefüllt und mit folgenden Angaben übermittelt:</td>
  </tr>
  
  <tr style="line-height: 140%;">
    <td colspan="2" style="line-height: 40px;">Kontaktdaten:</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Firmenname:</td>
    <td width="auto" style="color: #000000;">'.$company.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Ansprechtpartner:</td>
    <td width="auto" style="color: #000000;">'.$contactname.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Telefon-Nr./Handy-Nr.:</td>
    <td width="auto" style="color: #000000;">'.$tel.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">E-Mail:</td>
    <td width="auto" style="color: #000000;">'.$mail.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td colspan="2" style="line-height: 40px;">Fahrzeugdaten:</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Fahrzeugart:</td>
    <td width="auto" style="color: #000000;">'.$vehicletype.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Hersteller:</td>
    <td width="auto" style="color: #000000;">'.$fabricator.'</td>
  </tr>
  <tr style="line-height: 140%;"> 
    <td width="180" style="color: #808080;">Typ:</td>
    <td width="auto" style="color: #000000;">'.$type.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Erstzulassung:</td>
    <td width="auto" style="color: #000000;">'.$registrationdate.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Aufbau:</td>
    <td width="auto" style="color: #000000;">'.$vehiclebody.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Extras:</td>
    <td width="auto" style="color: #000000;">'.$extras.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Laufleistung in km oder Betriebsstunden:</td>
    <td width="auto" style="color: #000000;">'.$milage.'</td>
  </tr>
  <tr style="line-height: 140%;">
    <td width="180" style="color: #808080;">Preisvorstellung in EUR:</td>
    <td width="auto" style="color: #000000;">'.$askingprice.'</td>
  </tr>
  <tr style="line-height: 140%;"> 
    <td width="180" style="color: #808080;">Sonstiges:</td>
    <td width="auto" style="color: #000000;">'.$comment.'</td>
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

$mail->Subject = utf8_decode('Ankaufsformular');
$mail->Body    = utf8_decode($mailtable);
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo '<div class="red">Ihre Mitteilung wurde nicht korrekt übermittelt, bitte nehmen Sie telefonisch Kontakt mit uns auf.</div>'; // Message not send
} else {
   echo '<div class="order_submitted"><strong>Vielen Dank für Ihre Mitteilung!</strong><br/><br/>Ihr Angebot wurde erfolgreich übermittelt und wird nun zeitnah von uns bearbeitet.<br/><br/>Ihr TruckHouse Team</div>'; // Message submitted
}

}
 
?>