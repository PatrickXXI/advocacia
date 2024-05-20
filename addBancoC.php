<?php
    require "menu.php";
    require_once "conectaBanco.php";
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $processo = $_POST['processo'];

    $sql = "INSERT INTO cliente(nome, cpf, telefone, endereco) VALUES ('$nome','$cpf','$telefone','$endereco')";
    $banco->query($sql);
    if($banco->affected_rows >= 1){
        echo "<p> Cliente $nome cadastrado com sucesso!</p>";
    }else {
        echo "<p> Erro ao cadastrar cliente.</p>";
    }
    $sql2 = "INSERT INTO processos(nome) VALUE ('$processo')";
    $banco->query($sql2);
    if($banco->affected_rows >= 1){
        echo "Processo cadastrado!";
    }else {
        echo "<p> Erro ao cadastrar processo.</p>";
    }
?>
