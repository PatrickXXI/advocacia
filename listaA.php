<?php
    require_once "menu.php";

    require 'conectaBanco.php'; // conectando com o banco
            
    $sql = "SELECT * FROM advogado"; // selecionando a tabela login 
    $resultado = mysqli_query($banco, $sql); // Conexão com banco , consulta
    $banco->close(); // fechando conexão com o banco
?>
    <table class="table table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">Especialidade</th>
        </thead>
        <tbody>
<?php
            if($resultado){
                while($linha = mysqli_fetch_assoc($resultado)){
                $id = $linha['id'];          // poderia usar só: $linha ('id');
                $nome = $linha['nome'];
                $cpf = $linha['cpf'];
                $telefone = $linha['telefone'];
                $especialidade = $linha['especialidade'];
                echo "<tr> 
                <th scope='row'>$id</th>
                <td>$nome</td>
                <td>$cpf</td>
                <td>$telefone</td>
                <td>$especialidade</td>
                <td>...</td>
                </tr>"; // cada uma das tags é uma coluna
                }
            }
?>