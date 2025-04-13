<?php
session_start();

$arquivo = "catalogo.json";

if(file_exists($arquivo)) {
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
    <style>
        .animal-detalhe {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            text-align: center;
        }

        .animal-detalhe img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .animal-detalhe h2 {
            margin-top: 15px;
            font-size: 32px;
            color: #2c3e50;
        }

        .animal-detalhe .tipo {
            font-size: 18px;
            font-weight: bold;
            color: #3498db;
            margin: 10px 0;
        }

        .animal-detalhe p {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="main">
        <?php include("cabecalho.php"); ?>

        <div class="conteudo">
            <?php 
            $animalNome = $_GET['animal'] ?? null;

            if ($animalNome) {
                foreach($catalogo as $item) {
                    if ($item['nome'] == $animalNome) {
                        echo '<div class="animal-detalhe">';
                        echo '<img src="' . htmlspecialchars($item['imagem']) . '" alt="' . htmlspecialchars($item['nome']) . '">';
                        echo '<h2>' . htmlspecialchars($item['nome']) . '</h2>';
                        echo '<div class="tipo">' . htmlspecialchars($item['terrestre']) . '</div>';
                        echo '<p>' . nl2br(htmlspecialchars($item['descricao'])) . '</p>';
                        echo '</div>';
                        break;
                    }
                }
            } else {
                echo "<p style='text-align:center; font-size: 18px;'>Nenhum animal selecionado.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
