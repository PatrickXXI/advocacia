<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cliente</title>
</head>
<body>
    <?php
    require 'menu.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h1>Cadastro de cliente</h1>
            <form action="addBancoC.php" method="post">
                <div class="mb-3">
                    <label class="form-label"for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" placeholder="Digite o nome...">
                </div>
                <div class="mb-3">
                    <label class="form-label"for="cpf">CPF</label>
                    <input class="form-control" type="number" name="cpf" placeholder="Digite o cpf...">
                </div>
                <div class="mb-3">
                    <label class="form-label"for="telefone">Telefone</label>
                    <input class="form-control" type="number" name="telefone" placeholder="Digite o telefone...">
                </div>
                <div class="mb-3">
                    <label class="form-label"for="endereco">Endereço</label>
                    <input class="form-control" type="text" name="endereco" placeholder="Digite o endereco...">
                </div>
                <div class="mb-3" action="addBancoP.php">
                    <label for="processo" class="form-label">Processo</label>
                    <select class="form-select" name="processo">
                        <option value="trabalhista">Trabalhista</option>
                        <option value="penal">Penal</option>
                        <option value="civel">Cível</option>
                        <option value="tributarista">Tributarista</option>
                        <option value="ambiental">Ambiental</option>
                        <option value="intelectual">Propriedade Intelectual</option>
                        <option value="familia">Familia</option>
                        <option value="imobiliario">Imobiliário</option>
                    </select>
                </div>
                <input class="btn btn-outline-danger" type="button" value="Cancelar">
                <input class="btn btn-outline-success" type="submit" value="Salvar">
            </form>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>