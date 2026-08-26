<?php
    $idade = 27;
    $nome = "Sr. João";
    $desconto = true;

    if($idade >= 65 || $desconto == true){
        echo "$nome tem desconto!!!";
    }
    else{
        echo "Sem desconto na compra...";
    }
?>