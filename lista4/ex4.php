<?php
    $email = "seuemail@gmail.com";
    $senha = "suasenha123";
    $ativo = true;

    if($email == "seuemail@gmail.com" &&
        $senha == "suasenha123" &&
        $ativo == true){
            echo "login autorizado...";
        }else{
            echo "usuário ou senha inválido...";
        }
?>