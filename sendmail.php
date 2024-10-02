<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
$nome = addslashes($_POST["nome"]);
$email = addslashes($_POST["email"]);
$empresa = addslashes($_POST["empresa"]);
$necessidade = addslashes($_POST["necessidade"]);
$whats = addslashes($_POST["whats"]);


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'deepcodeagencia@gmail.com';  // Remetente           
    $mail->Password   = $_ENV['GPASS'];    //Colocar essa variavel dentro do dotenv                          
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
    $mail->Port       = 465;                              

    $mail->setFrom($email);
    $mail->addAddress('deepcodeagencia@gmail.com', 'Destinatario');
    
    $mail->isHTML(true);    

    $mail->Subject = 'Você recebeu uma mensagem na DeepCode';
    $mail->Body = "
    <strong>Nome:</strong> $nome <br>
    <strong>Email:</strong> $email <br>
    <strong>Empresa:</strong> $empresa <br>
    <strong>WhatsApp:</strong> $whats <br><br>
    <strong>Necessidade:</strong> <br> $necessidade <br><br>

    <h5>OBS: $nome concordou com as políticas de privacidade e os termos de uso do site.</h5>
";


    
    $mail->send();
    echo "<script>window.alert('Obrigado por entrar em contato! Em breve entraremos em contato com você.')
    window.location.href='index.php';</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}