<?php

$email = isset($_POST['email']) ? $_POST['email'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : null;
if($email!=null && $name!=null){
    $to      = $email;
    $subject = 'Gracias por ponerte en contacto';
    $message = "
<html>
<head>
  <title>Email de contacto PROSEN</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <meta http-equiv='x-ua-compatible' content='ie=edge'>
</head>
<body>
  <section>
    <div class='container'>
      <div class='row' style='padding-top:100px'>
      <div class='card text-center col'>
        <img class='card-img-top' src='http://res.cloudinary.com/hammock-software/image/upload/v1535418201/Untitled-1_gtggiz.png' alt='Card image cap'>
          <div class='card-body'>
            <h5 class='text-center'>Hola, $name</h5>
            <p class='card-text'>Gracias por querer estar en contacto con nosotros. <br> Nostros responderemos pronto, revisa tu bandeja de correo <b>no deseado</b>. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
";

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    
    // Additional headers
    $headers[] = "To: $name <$email>";
    $headers[] = 'Bcc: Julio Morales <jmorales@prosen.com.mx>';
    $headers[] = 'From: Servicio al cliente PROSEN <sac@prosen.com.mx>';
    
    // print_r($message);
    // Mail it
    mail($to, $subject, $message, implode("\r\n", $headers));
}else{
  print_r('error');
}
?>