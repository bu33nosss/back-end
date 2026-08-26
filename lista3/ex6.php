<?php

$valorPedido = 27;
$valorMinimoEntrega = 20;

$IdadeCliente = 19;

$quantidadePedida = 3;
$Estoquedis = 2;

$StatusdoPedido = "Pago";



if($valorPedido >= $valorMinimoEntrega){
    echo "Entrega grátis!";
}
else{
    echo $valorMinimoEntrega + $valorPedido;
}
echo "<br>";
if($IdadeCliente >= 18){
    echo "Pode comprar bebida alcoólica";
}
else{
    echo "Não pode comprar bebida alcoólica";
}
echo "<br>";
if($quantidadePedida <= $Estoquedis ){
    echo "Não tem estoque";
}
else{
    echo "Tem estoque!";
}
echo "<br>";
if( $StatusdoPedido == "pago" ){
    echo "Libera para entrega";
}
else{
    echo "Não libera!";
}

