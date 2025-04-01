<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoológico Terra Selvagem - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    form {
        padding: 10px;
    }
</style>
<body>
    <?php include("cabecalho.html") ?>
    <div class="conteudo">
        <h1>Login</h1>
        <form method="post">
            Usuário ou email<br> <input name="usuario" type="text"><br>
            Senha<br> <input name="senha" type="password">
        </form>
    </div>
    <?php include("rodape.html") ?>
</body>
</html>