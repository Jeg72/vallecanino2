<?php
 
  if(isset($_POST['contact-form'])) {


  	
}

  	$email_to = "falconjosegarces@gmail.com";
    $email_subject = "Contacto desde el sitio web";


    $email_message = "Detalles del formulario de contacto:\n\n";
 
     $email_message.= $_POST['nombre']."\n"; 
     $email_message.= $_POST['email']."\n"; 
     $email_message.= $_POST['subject']."\n"; 
     $email_message.= $_POST['message']."\n"; 

$headers = 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);


die();

?>