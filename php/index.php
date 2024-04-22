<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];
    
    $to = "devpaiola@example.com"; // Seu endereço de email
    $subject = "Novo formulário submetido";
    $message = "Nome: $nome\n";
    $message .= "Email: $email\n";
    $message .= "Celular: $celular\n";
    $message .= "Mensagem:\n$mensagem";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Obrigado! Seu formulário foi enviado com sucesso.";
    } else {
        echo "Desculpe, houve um problema ao enviar o formulário.";
    }
}
?>
