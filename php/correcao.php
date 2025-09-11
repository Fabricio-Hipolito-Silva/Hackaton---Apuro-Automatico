<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../php/loginprofessor.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Correção da Prova</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Envie a foto da prova</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="prova" accept="image/*" required><br><br>
        <button type="submit">Enviar para Correção</button>
    </form>
</div>
</body>
</html>