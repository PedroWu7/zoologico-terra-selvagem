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
<body>
    <div class="main">
        <?php include("cabecalho.php");?>
        <div class="conteudo">

            <?php $animal = $_GET['animal']; ?>

            <?php foreach($catalogo as $item): ?>
                <div class="item">
                    <?php
                        if($item['nome'] == $animal){
                            print_r($item);
                        }
                    ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>