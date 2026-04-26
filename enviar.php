<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$mensagem = $_POST['mensagem'];

$para = "professormarciodutra@gmail.com";
$assunto = "Novo contato do site";

$corpo = "Nome: " . $nome . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Celular: " . $celular . "\n";
$corpo .= "Mensagem: " . $mensagem . "\n";

$cabecalhos = "From: ".$email;

mail($para, $assunto, $corpo, $cabecalhos);

echo "Mensagem enviada com sucesso!";
?>