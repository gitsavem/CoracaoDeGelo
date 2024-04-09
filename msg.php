<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
    // Configurações para o envio do email
    $to = "savemself@gmail.com";
    $subject = "Mensagem do site";
    $message = "Nome: $nome\n\nEmail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    // Envia o email
    if (mail($to, $subject, $message, $headers)) {
        echo "Sua mensagem foi enviada com sucesso.";
    } else {
        echo "Desculpe, houve um problema ao enviar sua mensagem.";
    }
}
?>