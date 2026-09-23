<?php
    $tipo = $_POST['tipo'];
    $qtd = $_POST['gas'];
    $total = 0;

    switch($tipo){
        case "Gasolina":
            $total = 6.20 * $qtd;
            echo "Você abasteceu " . $qtd . " litros.<br>";
            echo "Total: R$" . round($total, 2);
            break;
        case "Etanol":
            $total = 4.20 * $qtd;
            echo "Você abasteceu " . $qtd . " litros.<br>";
            echo "Total: R$" . round($total, 2);
            break;
        case "Diesel":
            $total = 6 * $qtd;
            echo "Você abasteceu " . $qtd . " litros.<br>";
            echo "Total: R$" . round($total, 2);
            break;
        default:
            echo "Tipo inexistente <br>";
            break;
    }
?>