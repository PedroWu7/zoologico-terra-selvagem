<?php
session_start();

$arquivo = "catalogo.json";

if(file_exists($arquivo)) {
    $json = file_get_contents($arquivo);
    $catalogo = json_decode($json, true);
}else{
    $catalogo = [];

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
    .animais{
        display: flex;
        flex-direction: row;

    }
    .animal{
        display: flex;
        border-color: black;
        border: 1px solid;
        margin: 10px;
        padding: 10px;
        flex-direction: column;

    }
    .animal img{
        width: 200px;
        height: 200px;
    }
</style>
<body>
    <div class="main">
        <?php include("cabecalho.html");
        foreach($catalogo as $item): ?>
            <div class="item">
                <h2><?php echo $item['nome']; ?></h2>
                <img src="<?php echo $item['imagem']; ?>"alt="<?php echo $item['nome'];?> ">
                <p><?php echo $item['descricao']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>