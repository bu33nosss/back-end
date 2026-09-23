<?php
    $nome = $_POST['nome'];
    $hrs = $_POST['hrs'];

    $hrsAno = $hrs * 365;
    $meses = round($hrsAno / 2 / 365, 2);

    echo "Olá $nome <br><br>";
    echo "Você passa aproximadamente $hrsAno horas por ano <br>";
    echo "Isso representa aproximadamente ", $meses, " meses do seu ano<br>";
    echo "Por favor, toque a grama :)";
?>