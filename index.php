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
        <?php include("cabecalho.html") ?>
        <div class="conteudo">
            <h1>Animais :)</h1>
            <div class="animais">
                <div class="animal" >
                    <h1>Cachorro</h1>
                    <img src = "cachorro.jpg">
                    <p>Esse animal é um cachorrosdadsadadsadsadas.</p>
                </div>
                <div class="animal" >
                    <h1>Elefante</h1>
                    <img src = "elefante.jpg">
                    <p>Esse animal é um elefante.</p>
                </div>
                <div class="animal" >
                    <h1>Girafa</h1>
                    <p>Esse animal é um girafa.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>