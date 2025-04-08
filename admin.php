<?php 
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Se não estiver logado, redireciona para a página de login
    header("Location: login.php");
}

$arquivo = "catalogo.json";

if(file_exists($arquivo)) {
    $json = file_get_contents($arquivo);
    $catalogo = json_decode($json, true);
}else{
    $catalogo = [];

}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $imagem = $_POST["imagem"];
    $descricao = $_POST["descricao"];


    $novoItem = [
        "nome" => $nome,
        "imagem" => $imagem,
        "descricao" => $descricao,
    ];

    $catalogo[] = $novoItem;
    file_put_contents($arquivo, json_encode($catalogo, JSON_PRETTY_PRINT));

    header("Location: index.php");
    exit();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoológico Terra Selvagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    
</style>
<body>
    <div class="main">
        <?php include("cabecalho.html");?>
        <div class="conteudo">
            <h1> Adicionar novo jogo</h1>
            <form method="POST">
                <label>Nome: </label><br>
                <input type="text" name="nome" required><br><br> 
        
                <label>Imagem: </label><br>
                <input type="text" name="imagem" required><br><br> 

                <label>Descrição: </label><br>
                <input type="text" name="descricao" required><br><br>

                <label>Terrestre/aquático/aéreo: </label><br>
                <input type="text" name="terrestre" required><br><br>

                <button type="submit"> Adicionar </button> 
            </form>
        </div>
    </div>
</body>
</html>