<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 bg-brown"></div>
            <div class="col-md-6 m-3 p-3"><!--div Form-->
        <h1>Login</h1>
            <form action="validaSenha.php" method="post">
                <div class="mb-3">
                    <label class="form-label"for="nome">Nome usuario</label>
                    <input class="form-control" type="text" name="nome" placeholder="">
                </div>
                <div class="mb-3">
                    <label class="form-label"for="senha">Senha</label>
                    <input class="form-control" type="password" name="senha" placeholder="Apenas numeros">
                </div>
                <input class="btn btn-outline-success" type="submit" value="Salvar">
            </form>
            </div>

            <div class="col-md-3 bg-brown"></div>
        </div>
    </div>
</body>
</html>