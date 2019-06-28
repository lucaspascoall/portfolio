<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "queroaudiovisual@gmail.com";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['name'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel 
//$assunto
$assunto = $_POST['subject'];
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$name;
$mensagem .= "<br>  <strong>Telefone: </strong>"
.$_POST['phone'];
$mensagem .= "<br>  <strong>Email: </strong>"
.$_POST['email'];
$mensagem .= "<br>  <strong>Mensagem: </strong>"
.$_POST['message'];
 
//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  lucaspascoal.dx.am<contato@lucaspascoal.dx.am>\n"; 
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <contato@lucaspascoal.dx.am>\n"; 
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <contato@lucaspascoal.dx.am>\n"; 
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";
 
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.


header("Location: http://lucaspascoal.dx.am");


?>