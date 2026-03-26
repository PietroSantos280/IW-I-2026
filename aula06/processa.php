<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //email: adm@email.com
    //senha: 1234

    if ($email == 'adm@email.com' && $senha == '1234') {
        //vamos para a área secreta...
        //echo"vamos para a área secreta";
        $nome = 'Pietro';
        header('Location: restrita.php?nome='.$nome);
    } else {
        //volta para o formulario...
        //echo 'volta para o formulario';
        echo"<script> alert('Seu usuario ou sua senha está errado'); window.location'formulario.php'; </script>";
    }
?>