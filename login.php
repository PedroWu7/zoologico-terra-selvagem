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
    .conteudo {
        display: flex;
        align-items: left;
        justify-content: left;
        text-align: left;
    }
</style>
<body>
    <div class="main">
        <?php include("cabecalho.html") ?>
        <div class="conteudo">
            <h1 style="font-size: 25px">Login</h1>
            <form method="post">
                Usuário<br> <input name="usuario" type="text"><br>
                Senha<br> <input name="senha" type="password">
            </form>
        </div>
    </div>
</body>
</html>