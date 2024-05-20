<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];

if($nome != "patrick"){
    echo "Nome de usuario invalido!!";
}
if(is_numeric($senha) && $senha != 1234){
    echo "Senha invalida!";
}
if($senha == 1234){
    header('Location: home.php');
    exit; // Garante que o script pare aqui e o redirecionamento funcione corretamente
}
?>