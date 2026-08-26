<?php

$nomeCompleto = "Afonso Santos";
$senha = 12345;
$confirmarSenha = $senha;
$idade = 19;
$cadastro = 0;



if($cadastro == 0){
    echo "Cadastro liberado!";
if($nomeCompleto != ""){
     echo "Seu nome é: ", $nomeCompleto; $cadastro = 1;
   
}
else{
    echo "Seu nome está vazio";
}
echo "<br>";
if($senha == $confirmarSenha){
    echo "Senha confirmada!", $cadastro += 1;
    
}
else{
    echo "Senha não confirmada";
}
echo "<br>";
if($idade >= 18){
    echo "Você é maior de idade!", $cadastro += 1;
 
}
else{
    echo "Você é menor de idade!";
}
  }
  else{
      echo "Cadastro negado!";
  }

echo "<br>";
?>