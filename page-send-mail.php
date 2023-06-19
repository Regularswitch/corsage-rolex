<?php

if (empty($_POST)) {
    echo json_encode([
        "next" => false
    ]);
    exit;
}

$to      = "boutique.rolex@corsage.com.br";
$assunto = "SITE - CORSAGE";

$titulo    = $_POST['titulo'];
$pais      = $_POST['class:c-form-select'];
$nome      = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email     = $_POST['your-email'];
$telefone  = $_POST['telefone'];
$mensagem  = $_POST['mensagem'];
$cidade    = $_POST['cidade'];
$endereco  = $_POST['endereco'];
$termos    = $_POST['termos'];
$receber   = $_POST['receber'];

$headers = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "To: Contato <{$to}> \r\n";
$headers .= "From: $nome <{$email}> \r\n";

$body = "<b>Nacionalidade:</b> $pais <br>";
$body .= "<b>Nome:</b> $titulo $nome $sobrenome <br>";
$body .= "<b>Email:</b> $email <br>";
$body .= "<b>Telefone:</b> $telefone <br>";
$body .= "<b>Endereço:</b> $endereco - $cidade  <br>";
$body .= "<b>Termos:</b> $termos <br>";
$body .= "<b>Receber email:</b> $receber <br>";
$body .= "<b>mensagem:</b> $mensagem <br>";

$result     = mail($to, $assunto, $body, $headers);

$headersCliente = "MIME-Version: 1.0 \r\n";
$headersCliente .= "Content-type: text/html; charset=utf-8 \r\n";
$headersCliente .= "To: Contato <{$email}> \r\n";
$headersCliente .= "From: $nome <{$top}> \r\n";

$bodyCliente = "Agradecemos sua mensagem. </br>Não estamos disponíveis no momento, mas responderemos assim que possível. </br>Atenciosamente, </br>Boutique Rolex Corsage";

$emailVoltaCliente = mail($email, $assunto, $bodyCliente, $headersCliente);

echo json_encode([
    "next" => $result
]);