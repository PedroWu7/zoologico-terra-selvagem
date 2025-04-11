<?php
session_start();

$arquivo = "catalogo.json";

if (file_exists($arquivo)) {
    $json = file_get_contents($arquivo);
    $catalogo = json_decode($json, true);
} else {
    $catalogo = [];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoológico Terra Selvagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .animais {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap; /* Permite que os itens se ajustem melhor à tela */
    }

    .item {
        display: flex;
        border-color: black;
        border: 1px solid;
        margin: 10px;
        padding: 10px;
        flex-direction: column;
        width: 200px; /* Ajustando o tamanho das divs */
        text-align: center;
    }

    .item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .botao-ver-mais {
        margin-top: 10px;
        padding: 5px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 3px;
    }

    .botao-ver-mais:hover {
        background-color: #45a049;
    }
</style>
<body>
    <div class="main">
        <?php include("cabecalho.php"); ?>
        <div class="conteudo">
            <div class="animais">
                <?php if (count($resultados) > 0): ?>
                    <?php foreach ($resultados as $item): ?>
                        <div class="item">
                            <h2><?php echo $item['nome']; ?></h2>
                            <img src="<?php echo $item['imagem']; ?>" alt="<?php echo $item['nome']; ?>">

                            <?php
                            // Gerar o link para a página de detalhes do animal
                            $animal = urlencode($item['nome']);
                            echo "<a href='detalhes-animal.php?animal=".$animal."' class='botao-ver-mais'>Ver mais</a>";
                            ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Nenhum resultado encontrado.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
