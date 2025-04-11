<?php 
session_start();
$senha_hash = '$2y$10$EgWGy0sYuOddJN2QEUfSOOK4llKtLY54akYSmNz5EpUF4mZU3bMrm';

$usuario = $_POST['usuario'] ?? null;
$senha = $_POST['senha'] ?? null;

if(!is_null($usuario) && !is_null($senha)){
    if ($usuario == 'admin' && password_verify($senha, $senha_hash)){
        $_SESSION['loggedin'] = true;
        header("location: http://localhost/zoologico-terra-selvagem/admin.php");
    }else{
        echo"<p style='color: red;'><br>Usuário ou Senha inválidos</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoológico Terra Selvagem - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:rgb(255, 255, 255);">
    <div class="main">
        <?php include("cabecalho.php") ?>
        <div class="conteudo">
            <h1>Login</h1>
            <form class="formulario" style="height: 200px" method="post">
                Usuário<br> <input name="usuario" type="text"><br>
                Senha<br> <input name="senha" type="password"><br>
                <input style="margin: 10px" type="submit" name="logar" value="Entrar">

            </form>
        </div>
    </div>
</body>
</html>