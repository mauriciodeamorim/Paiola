<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Refrigeração Paiola</title>
<link href="estilo_enviar.css" rel="stylesheet" type="text/css" /> 
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
						\nEstado: $estado
						\nCidade: $cidade
						\nEndereço: $endereco
						\nTelefone: $telefone
						\nTelefone Comercial: $fax
						\nE-mail: $email
						\nPágina Web: $url
						\nGostaria de  receber a visita de um técnico no local: $visita
						\nHorario preferencial: $visita1
						\nDescrição do defeito: $mensagem";

						if(mail("contato@paiolarefrigeracao.com.br","Mensagem - Web Site","$mensagem_ok","from: $email")) {

						echo "$nome,</strong> em breve estaremos retornando seu contato.<br><br>Obrigado.";

}

}else{
	echo "$msg_erro";
	
	}
					  
					  
					  ?>
 <br />
 <br />
 <br />
 <a href="assistencia-tecnica-de-refrigeradores-em-sao-paulo.html" target="_parent"><br />
 <span class="txt">&gt;&gt; Voltar</span></a>
 </body>
</html>