<?php
    $nome = $_POST['nome'];
    $veiculo = strtolower($_POST['tipo']);
    $horas = $_POST['horas'];

    switch($veiculo){
        case "moto":
            echo $nome . ", o valor de estacionamento é R$" . 5 * $horas;
            break;
        case "carro":
            echo $nome . ", o valor de estacionamento é R$" . 8 * $horas;
            break;
        case "caminhonete":
            echo $nome . ", o valor de estacionamento é R$" . 12 * $horas;
            break;
        default:
            echo "Tipo Inválido!";
            break;
    }