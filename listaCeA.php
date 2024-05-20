<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista</title>
</head>
<body>
    <?php
    require 'menu.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-m-12 p-3 text-center">
                <h1>Listagem de clientes.</h1>
                <?php
                require 'conectaBanco.php'; // conectando com o banco

                // Modificando a query SQL para fazer um JOIN entre as tabelas cliente e advogado
                $sql = "SELECT c.nome AS nome_cliente, a.nome AS nome_advogado
                FROM cliente c
                INNER JOIN tem t ON c.id = t.fk_cliente_id
                INNER JOIN processos p ON t.fk_processos_id = p.id
                INNER JOIN advogado a ON p.fk_advogado_id = a.id
                WHERE a.especialidade = (SELECT a2.especialidade FROM advogado a2 WHERE a2.id = p.fk_advogado_id)";
                $result = $banco->query($sql);

                $resultado = $banco->prepare($sql);
                $resultado->execute();

                if($resultado){
                    echo '<table class="table table-hover">
                            <thead>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Cpf</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Advogado responsavel</th>
                            </thead>
                            <tbody>';
                    while($row_cliente = mysqli_fetch_assoc($result)){
                        $idC = $row_cliente['id'];
                        $nomeC = $row_cliente['nome'];
                        $cpfC = $row_cliente['cpf'];
                        $telefoneC = $row_cliente['telefone'];
                        $enderecoC = $row_cliente['endereco'];
                        $advogado = $row_cliente['nome_advogado'];

                        echo "<tr> 
                            <td>$idC</td>
                            <td>$nomeC</td>
                            <td>$cpfC</td>
                            <td>$telefoneC</td>
                            <td>$enderecoC</td>
                            <td>$advogado</td>
                            </tr>"; // cada uma das tags é uma coluna
                    }
                    echo '</tbody></table>';
                } else {
                    echo "Não foram encontrados resultados.";
                }
                // Fechando conexão com o banco
                $banco->close();
                ?>
            </div>
        </div>
    </div>
</body>
</html>