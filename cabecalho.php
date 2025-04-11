<?php 


$arquivo = "catalogo.json";
if (isset($_GET['pesquisa']) && $_GET['pesquisa'] !== '') {
    $termo = strtolower($_GET['pesquisa']);
    $resultados = [];
    if(file_exists($arquivo)) {
        $json = file_get_contents($arquivo);
        $catalogo = json_decode($json, true);
        // Filtrando os itens do catálogo com base no termo de pesquisa
        foreach ($catalogo as $item) {
            if (strpos(strtolower($item['nome']), $termo) !== false || strpos(strtolower($item['descricao']),  $termo) !== false|| strpos(strtolower($item['terrestre']),  $termo) !== false) {
                $resultados[] = $item;
            }
        }
    }
}else {
    // Se não houver pesquisa, exibe todos os itens
    $resultados = $catalogo;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        header {
            display: flex;
            width: 100%;
            height: 7%;
            flex-direction: row;
            background-color: black;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        nav {
            display: flex;
            justify-content: center;
            flex-direction: row;
            width: 100%;
        }

        a {
            font-size: 20px;
            color: white;
            padding-right: 15px;
            text-decoration: none;
        }

        #buscador {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            color: white;
        }

        #buscador input {
            margin-left: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="http://localhost/zoologico-terra-selvagem/">Catálogo</a>
            <a href="http://localhost/zoologico-terra-selvagem/">Início</a>
            <a href="http://localhost/zoologico-terra-selvagem/login.php">Login</a>
        </nav>
        <div id="buscador">
            <form method="GET">
                <input type="text" name="pesquisa" placeholder="Buscar animais...">
                <button type="submit">Buscar</button>
            </form>
        </div>
    </header>
</body>
</html>
