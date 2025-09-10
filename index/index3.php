<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: /php/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Aluno</title>
    <link rel="stylesheet" href="estilo.cssg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/javascript/graphic.js" defer></script>
    <link rel="stylesheet" href="/style/estilo.css">
    <style>
        #canvas {
            width: 80%;
            height: auto;
            max-width: 100%;
            max-height: 500px;
        }
    </style>
</head>
<body>
    <div id="cards">
        <div id="nota">
            nota final
        </div>
        <div id="acertos">
            acertos
        </div>
        <div id="porcen">
            percentual
        </div>
    </div>
    <div>
        <canvas id="canvas"></canvas>
    </div>
</body>
</html>
</html>