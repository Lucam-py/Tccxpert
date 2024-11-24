<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $to = "eng.lucasmatos@gmail.com";
    $subject = "Novo Pedido de Orçamento";
    $body = "Nome: $name\nE-mail: $email\nTelefone: $phone\nServiço: $service\nMensagem:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Orçamento enviado com sucesso!";
    } else {
        echo "Erro ao enviar orçamento.";
    }
}
?>
git add index.html style.css send_email.php
