<?php
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = round(($peso / ($altura**2)), 2);

    if ($imc < 18.5){
        echo $nome . ", você está <b>abaixo do peso ideal</b>, seu IMC é " . $imc;
    }elseif($imc >= 18.5 && $imc < 25){
        echo $nome . ", seu peso está <b>ideal</b>!! Seu IMC é " . $imc;
    }elseif($imc >= 25 && $imc < 30){
        echo $nome . ", cuidado! Você está no <b>sobrepeso</b>, seu IMC é " . $imc;
    }elseif($imc >= 30){
        $nome . ", por favor, busque ajuda. Você se enquadra na faixa de <b>obesidade</b>, seu IMC é " . $imc;
    }
?>