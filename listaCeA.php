<?php
    require_once "menu.php";

    require 'conectaBanco.php'; // conectando com o banco
    $sql = "SELECT nome, fk_advogado_id FROM processos
    INNER JOIN advogado ON advogado.especialidade = processos.nome";
    $sqlC = "SELECT * FROM cliente";
    $resultado = mysqli_query($banco, $sql);
    $resultadoC = mysqli_query($banco, $sqlC);
    $banco->close();
?>
    <table class="table table-hover">
        <thead>
            <th scope="col">Nome</th>
            <th scope="col">Processo</th>
            <th scope="col">Advogado</th>
        </thead>
        <tbody>
<?php
    if($resultado && $resultadoC){
        while($linha = mysqli_fetch_assoc($resultado)){
            $processo = ['nome'];
            $advogado = ['nome'];
            $linhaC = mysqli_fetch_assoc($resultadoC);
            $cliente = ($linhaC) ? $linhaC['nome'] : '';
            
            echo "<tr> 
                <th scope='row'>$cliente</th>
                <td>$processo</td>
                <td>$advogado</td>
                <td>...</td>
                </tr>";
        }
    }
?>
