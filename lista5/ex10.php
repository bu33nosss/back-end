<?php
    $massa = 65.5;
    $altura = 1.55;
    $imc = $massa / ($altura * $altura);

    if($imc < 19){
        echo "Abaixo do peso ideal!";
    }elseif($imc >= 19 && $imc <= 24){
        echo "Peso ideal";
    }elseif($imc > 24 && $imc <= 29){
        echo "Sobrepeso";
    }elseif($imc > 29 && $imc <= 34){
        echo "Obesidade grau I";
    }elseif($imc > 34 && $imc <= 39){
        echo "Obesidade grau II";
    }else{
        echo "Obesidade grau III";
    }

    echo "<br>", $imc;
?>