<?php 
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $imagem = $_POST["imagem"];
    $descricao = $_POST["descricao"];


    $novoItem = [
        "nome" => $nome,
        "imagem" => $imagem,
        "descricao" => $descricao,
    ];

    if(!isset($_SESSION["catalogo"])){

        $_SESSION["catalogo"] = [];
    }

    $_SESSION["catalogo"][] = $novoItem;

    header("Location: index.php");
    exit();


}
$catalogo = $_SESSION["catalogo"];
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