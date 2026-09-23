<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $servico = $_POST['servico'];

    echo $nome;
    switch($servico){
        case 1:
            echo "<br>Corte: R$30,00";
            break;
        case 2:
            echo "<br>Barba: R$20,00";
            break;
        case 3:
            echo "<br>Corte + Barba: R$45,00";
            break;
        default:
            echo "Serviço não encontrado";
            break;
    }
?>

