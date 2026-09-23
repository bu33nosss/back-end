<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == "giovanna.sousa@edu.senai.br" && $senha == "12345678"){
        echo "Login bem-sucedido";
    }else{
        echo "Email ou senha inválidos!";
    }
?>