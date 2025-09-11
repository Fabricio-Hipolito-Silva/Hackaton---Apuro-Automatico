<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: /php/loginprofessor.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Professor</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo!</h1>
        <img src="https://pbs.twimg.com/media/FvDYuyyX0AgWGXQ.jpg" width="300"><br><br>
        <form action="/php/correcao.php" method="get">
            <button type="submit">Correção para a prova</button>
        </form>
    </div>
</body>
</html>