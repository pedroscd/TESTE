<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $para = "estudosti016@gmail.com";  // Seu endereço de e-mail
    $assunto = "Mensagem do site de ";      


    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Mensagem: ".$mensagem."\n"."Telefone: ".$telefone;

    $cabeca = "From: pedro.scorrea11@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();


    if (mail($para,$assunto,$corpo,$cabeca)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
}
?>