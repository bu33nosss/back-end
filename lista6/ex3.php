<?php
    echo "Caixa Eletrônica - Itaú <br>";
    echo "1 - Consulta saldo, 2 - Fazer saque, 3 - Fazer depósito, 4 - Ver extrato, 5 - Sair <br>";

    $opcao = 2;

    switch($opcao){
        case 1:
            echo "Seu saldo é R$650,81";
            break;
        case 2:
            echo "Qual valor?";
            break;
        case 3:
            echo "Você depositou R$0,01";
            break;
        case 4:
            echo "Tigrinho: - R$50.00<br>";
            echo "Sales móveis: - R$100,00<br>";
            break;
        case 5:
            echo "Você finalizou a sessão";
            break;
        default:
            echo "Opção inválida";
            break;

    }
?>