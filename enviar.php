<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Refrigeração Paiola - Contato</title>
  <link href="css/estilo_enviar.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<?php
$erro = 0;

if (empty($nome)){
  $erro .= $erro++;
  $msg_erro = "Preencha o campo *Nome<br>";
}

if (empty($email)){
  $erro .= $erro++;
  $msg_erro .= "Preencha o campo *E-mail<br>";
}

if (empty($telefone)){
  $erro .=$erro++;
  $msg_erro .= "Preencha o campo *Telefone<br>";
}

if (empty($cidade)){
  $erro .=$erro++;
  $msg_erro .= "Preencha o campo *Cidade<br>";
}

if (empty($mensagem)){
  $erro .=$erro++;
  $msg_erro .= "Preencha o campo *Mensagem <br>";
}

if ($erro == 0) {  
  $mensagem_ok = "$nome,
    \nEmpresa: $empresa
    \nCidade: $cidade
    \nEndereço: $endereco
    \nTelefone: $telefone
    \nE-mail: $email
    \nGostaria de  receber a visita de um técnico no local: $visita
    \nHorario preferencial: $visita1
    \nDescrição do defeito: $mensagem";
  
  $headers = "MIME-Version: 1.1\n";
  $headers .= "Content-type: text/plain; charset=utf-8\n";
  $headers .= "From: $email\n"; // remetente
  $headers .= "Return-Path: $email\n"; // return-path

  if(mail("contato@refrigeracaopaiola.com.br","Contato Refrigeracao Paiola via web","$mensagem_ok", $headers)) {
    echo "$nome,</strong> em breve estaremos retornando seu contato.<br><br>Obrigado.";
  }
}
else{
  echo "$msg_erro";
}
?>
 <br />
 <br />
 <br />
 <a href="assistencia-tecnica-de-refrigeradores-em-sao-paulo.html" target="_parent"><br />
 <span class="txt">&gt;&gt; Voltar</span></a>
 </body>
<script type="text/javascript">
  function displayMessage(message) {
    alert(message);
  };
</script>
</html>
