<?php

$email = isset($_POST['email']) ? $_POST['email'] : null;
if($email!=null){
    $to      = $email;
    $subject = 'Gracias por ponerte en contacto';
    $message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    
    // Additional headers
    $headers[] = 'To: Usuario <'. $email .'>';
    $headers[] = 'Bcc: PROSEN <contacto@prosen.com.mx>';
    $headers[] = 'From: Contacto PROSEN <contacto@prosen.com.mx>';
    
    // Mail it
    mail($to, $subject, $message, implode("\r\n", $headers));
}
?>
