<?php
session_start();
include "conect.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Entrar como:</h1>

        <?php if (!empty($erro)): ?>
            <p style="color: red;"><?= $erro ?></p>
        <?php endif; ?>

        <form action="loginprofessor.php" method="Post">
            <button id="escolha" type="submit">Professor</button> <br id="bora"><br>
        </form>
        <form action="login.php" method="Post">
            <button id="escolha" type="submit" >Aluno</button>
        </form>

    </div>
</body>
</html>