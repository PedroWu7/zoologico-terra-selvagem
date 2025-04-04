<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoológico Terra Selvagem - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <?php include("cabecalho.html") ?>
        <div class="conteudo">
            <h1>Login</h1>
            <form style="height: 200px" method="post">
                Usuário<br> <input name="usuario" type="text"><br>
                Senha<br> <input name="senha" type="password" required><br>
                <input style="margin: 10px" type="submit" name="logar" value="Entrar">

                <?php 
                if(isset($_POST['usuario']) && isset($_POST['senha'])){
                    if(($_POST['usuario'] == "admin") && ($_POST['senha'] == "123")){
                        header("location: http://localhost/zoologico-terra-selvagem/admin.php");
                    }else{
                        echo"<p style='color: red;'><br>Senha inválida</p>";
                    }
                }
                ?>

            </form>
        </div>
    </div>
</body>
</html>