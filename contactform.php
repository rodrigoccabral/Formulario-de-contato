<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "rodrigo-cabral@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Você recebeu um e-mail de ".$name.".\n\n".$message;

    if(mail($mailTo, $subject, $txt, $headers)) {
        header("Location: index.php?mailsend");
        echo("Email enviado com sucesso");
    } else {
        echo("O email não pode ser enviado");
    }
    
}

?>