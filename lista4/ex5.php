<?php
    echo "Bem-vindo a JP BET<br>";
    echo "Acerte o número de 0 a 20 e ganhe o triplo";

    $aposta = 10;
    $numeroEscolhido = 5;

    if($numeroEscolhido == $numeroEscolhido+1){
        echo "Você ganhou", $aposta*3;
    }
    else{
        echo "<br>Quase lá... Seu número foi: ", $numeroEscolhido;
        echo "<br>Número sorteado: ", $numeroEscolhido + 1;
    }
?>