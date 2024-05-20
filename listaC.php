<?php
    require_once "menu.php";

    require 'conectaBanco.php'; // conectando com o banco
            
    $sql = "SELECT * FROM cliente"; // selecionando a tabela login 
    $resultado = mysqli_query($banco, $sql); // Conexão com banco , consulta

    $sql2 = "SELECT * FROM processos";
    $resultado2 = mysqli_query($banco, $sql2);
    $banco->close(); // fechando conexão com o banco
?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Processo</th>
            </tr>
        </thead>
        <tbody>
<?php
            if($resultado && $resultado2){
                while($linha = mysqli_fetch_assoc($resultado)){
                $id = $linha['id'];          // poderia usar só: $linha ('id');
                $nome = $linha['nome'];
                $cpf = $linha['cpf'];
                $telefone = $linha['telefone'];
                $endereco = $linha['endereco'];
                
                $linhaProcesso = mysqli_fetch_assoc($resultado2);
                $processo = ($linhaProcesso) ? $linhaProcesso['nome'] : '';
                echo "<tr> 
                <th scope='row'>$id</th>
                <td>$nome</td>
                <td>$cpf</td>
                <td>$telefone</td>
                <td>$endereco</td>
                <td>$processo</td>
                <td>...</td>
                </tr>"; // cada uma das tags é uma coluna
                }
            }
?>