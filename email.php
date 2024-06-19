<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = isset($_POST['name']) ? $_POST['name'] : 'Nao informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Nao informado';
$tel = isset($_POST['tel']) ? $_POST['tel'] : 'Nao informado';
$message = isset($_POST['message']) ? $_POST['message'] : 'Nao informado';
$date = date('d/m/Y H:i:s');

if($email && $name){
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'joderem123@gmail.com';
    $mail->Password = 'iynl txcg nyrj bkhz';
    $mail->Port = 587;
    
    $mail->setFrom('joderem123@gmail.com');
    $mail->addAddress('joderem123@gmail.com'); #provedor
    
    
    $mail->isHTML(true);
    $mail->Subject = 'Contato - novo projeto zooplan';
    $mail->Body = "Name: {$name}<br>
                   Email: {$email}<br>
                   Message: {$message} <br>
                   Telefone: {$tel} <br>
                   Data/hora: {$date}";
    
    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado';
    }
    
} else{
    echo 'Email nao enviado: informar o email e a mensagem';
}


