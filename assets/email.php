<?php
$to      = 'mmartche@gmail.com';
$subject = 'Contato Cozinha SP';
$message = 'Mensagem enviada através do site Cozinha SP - nome:'.$_POST[nome].'; e-mail:'.$_POST[email].'; escolheu a opção?'.$_POST[flag];
$headers = 'From: webmaster@nucleo.org' . "\r\n" .
    'Reply-To: webmaster@nucleo.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
OBRIGADO PELA MENSAGEM
<script type="text/javascript">window.open('/','_self');</script>