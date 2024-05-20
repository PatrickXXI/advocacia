<?php
    require "menu.php";
    require_once "conectaBanco.php";
    $nomeA = $_POST['nome'];
    $cpfA = $_POST['cpf'];
    $telefoneA = $_POST['telefone'];
    $especialidadeA = $_POST ['especialidade'];

    $sql = "INSERT INTO advogado(nome, cpf, telefone, especialidade) VALUES ('$nomeA','$cpfA','$telefoneA','$especialidadeA')";
    $banco->query($sql);
    if($banco->affected_rows >= 1){
        echo "<p> Cliente $nomeA cadastrado com sucesso!</p>";
    }else {
        echo "<p> Erro ao cadastrar cliente.</p>";
    }
    //$banco->close();
?>