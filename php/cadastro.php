<?php
include "conect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $rm   = $_POST['rm'];
    $senha = $_POST['senha'];  

    $check = $conn->prepare("SELECT id FROM tb_usuarios WHERE rm = ?");
    $check->execute([$rm]);

    if ($check->rowCount() > 0) {
        $erro = "Esse RM já está cadastrado. Tente outro.";
    } else {
        $stmt = $conn->prepare("INSERT INTO tb_usuarios (nome, rm, senha) VALUES (?, ?, ?)");
        if ($stmt->execute([$nome, $rm, $senha])) {
            $sucesso = "Cadastro realizado com sucesso! <a href='login.php'>Fazer login</a>";
        } else {
            $erro = "Erro ao cadastrar usuário.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>

        <?php if (!empty($erro)): ?>
            <p style="color: red;"><?= $erro ?></p>
        <?php endif; ?>

        <?php if (!empty($sucesso)): ?>
            <p style="color: green;"><?= $sucesso ?></p>
        <?php endif; ?>

        <form method="post" action="">
            <input type="text" name="nome" placeholder="Nome completo" required>
            <input type="text" name="rm" placeholder="RM" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Cadastrar</button>
            <p>Já possui uma conta? <a href="login.php">Fazer Login</a></p>
        </form>
    </div>
</body>
</html>