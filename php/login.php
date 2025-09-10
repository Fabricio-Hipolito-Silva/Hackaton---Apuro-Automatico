<?php
session_start();
include "conect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['rm']) && isset($_POST['senha'])) {
        $rm = $_POST['rm'];
        $senha = $_POST['senha'];

        $stmt = $conn->prepare("SELECT * FROM tb_usuarios WHERE rm = ?");
        $stmt->execute([$rm]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && $usuario['senha'] === $senha) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            header("Location: /index/index3.php"); 
            exit;
        } else {
            $erro = "RM ou senha incorretos!";
        }
    } else {
        $erro = "Por favor, preencha todos os campos!";
    }
}
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
        <h1>Login</h1>

        <?php if (!empty($erro)): ?>
            <p style="color: red;"><?= $erro ?></p>
        <?php endif; ?>

        <form method="post" action="">
            <input type="text" name="rm" placeholder="Digite seu RM" required>
            <input type="password" name="senha" placeholder="Digite sua Senha" required>
            <input type="text" name="etec" placeholder="Digite o Codigo de sua Etec" required>
            <button type="submit">Entrar</button>
        </form>

        <p>Não possui uma conta? <a href="cadastro.php">Cadastrar-se</a></p>
    </div>
</body>
</html>