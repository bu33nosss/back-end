<?php
    $idade = 18;
    $pcd = true;
    $gestacao = false;

    if($idade >= 60 || $pcd == true || $gestacao == true){
        echo "ATENDIMENTO PRIORITÁRIO";
    }
    else{
        echo "ATENDIMENTO NORMAL";
    }
?>