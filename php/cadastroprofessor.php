<?php
include "conect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $loginprof = $_POST['loginprof'];
    $senha = $_POST['senha'];

    if (empty($loginprof)) {
        $erro = "O campo Login não pode estar vazio.";
    } else {
        $check = $conn->prepare("SELECT id FROM tb_usuarios WHERE loginprof = ?");
        $check->execute([$loginprof]);

        if ($check->rowCount() > 0) {
            $erro = "Esse Login já está cadastrado. Tente outro.";
        } else {
            $stmt = $conn->prepare("INSERT INTO tb_usuarios (nome, loginprof, senha) VALUES (?, ?, ?)");
            if ($stmt->execute([$nome, $loginprof, $senha])) {
                $sucesso = "Cadastro realizado com sucesso! <a href='loginprofessor.php'>Fazer login</a>";
            } else {
                $erro = "Erro ao cadastrar usuário.";
            }
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
            <input type="text" name="loginprof" placeholder="Login" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Cadastrar</button>
            <p>Já possui uma conta? <a href="loginprofessor.php">Fazer Login</a></p>
        </form>
    </div>
</body>
</html>