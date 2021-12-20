<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$EmailTo = "bagesyco@hotmail.com";
$Subject = "has recibido un nuevo comentario desde tu sitio web bagesyco.com";
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['phone'])); 
$website = Trim(stripslashes($_POST['website'])); 
$subject = Trim(stripslashes($_POST['subject'])); 
$message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (!$validationOK) {
// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Sitio web: ";
$Body .= $website;
$Body .= "\n";
$Body .= "Asunto: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

  print "<meta http-equiv=\"refresh\" content=\"0;URL=success.html\">";
  exit;
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=failed.html\">";
}
?>