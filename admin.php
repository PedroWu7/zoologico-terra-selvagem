<?php 
session_start();

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
    <h1> Adicionar novo jogo</h1>
    <form method="POST">
        <label>Nome: </label><br>
        <input type="text" name="nome" required><br><br> 
        
        <label>Imagem: </label><br>
        <input type="text" name="imagem" required><br><br> 

        <label>Descrição: </label><br>
        <textarea name="descricao" required></textarea><br><br> 

        <button type="submit"> Adicionar </button> 
    </form>
</body>
</html>