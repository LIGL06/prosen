<?php

$email = isset($_POST['email']) ? $_POST['email'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : null;
$service = isset($_POST['service']) ? $_POST['service'] : null;
if($email!=null && $name!=null){
    $to      = $email;
    $subject = 'Gracias por ponerte en contacto';
    $message = "
<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN' 'http://www.w3.org/TR/REC-html40/loose.dtd'>
<html>
<head>
  <title>Email de contacto PROSEN</title>
  <meta charset='utf-8'>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
  <meta http-equiv='x-ua-compatible' content='ie=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
</head>
<body style='box-sizing: border-box;margin: 0;font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;;font-size: 1rem;font-weight: 400;line-height: 1.5;color: #212529;text-align: left;background-color: #fff;min-width: 992px!important;'>
  <section style='box-sizing: border-box;display: block;'>
    <div style='box-sizing: border-box;width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;min-width: 992px!important;'>
      <div style='padding-top: 100px;box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;'>
      <div style='box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex-preferred-size: 0;flex-basis: 0;-ms-flex-positive: 1;flex-grow: 1;max-width: 100%;display: flex;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: .25rem;text-align: center!important;'>
        <img src='http://res.cloudinary.com/hammock-software/image/upload/v1535418201/Untitled-1_gtggiz.png' alt='Card image cap' style='box-sizing: border-box;vertical-align: middle;border-style: none;page-break-inside: avoid;width: 100%;border-top-left-radius: calc(.25rem - 1px);border-top-right-radius: calc(.25rem - 1px);'>
          <div style='box-sizing: border-box;-ms-flex: 1 1 auto;flex: 1 1 auto;padding: 1.25rem;'>
            <h5 style='box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.25rem;text-align: center!important;'>Hola, $name</h5>
            <p style='box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.25rem;text-align: center!important;'>Gracias por ponerte contacto con nosotros. </p>
            <p style='box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.25rem;text-align: center!important;'>Pronto uno de nuestros asesores te atenderá en el área de tu interés (<b>$service</b>).</p>
            <br style='box-sizing: border-box;'> Por favor revisa tu bandeja de correo <b style='box-sizing: border-box;font-weight: bolder;'>no deseado</b> de manera continua.
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
";

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    
    // Additional headers
    $headers[] = "To: $name <$email>";
    $headers[] = 'Bcc: Julio Morales <jmorales@prosen.com.mx>, Servicio al cliente PROSEN <sac@prosen.com.mx>';
    $headers[] = 'From: Servicio al cliente PROSEN <sac@prosen.com.mx>';
    
    // print_r($message);
    // Mail it
    mail($to, $subject, $message, implode("\r\n", $headers));
}else{
  print_r('error');
}
?>