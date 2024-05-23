<?php 

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);


$to = "joderim32@gmail.com";
$subject = "Contato - zooplan infraestrutura";
$body = "Nome: ".$nome. "\r\n"."Email: ".$email. "\r\n"."Mensagem: ".$mensagem;

$header = "From:joderem123@gmail.com"."\r\n"."Reply-to:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Email nao foi enviado");
}


}


?>