<?php

    //ini_set('SMTP', 'milenasantosdeoliveira40@gmail.com');
    //ini_set('smtp_port', '25');
    //ini_set('sendmail_from', 'hildebranddasilvaamanda@gmail.com');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  $destino = "hildebranddasilvaamanda@gmail.com";
  $assunto = "Contato pelo Site";

  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=index.php?pg=contato'>";
?>