<?php
include "conect.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = "uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadFile = $uploadDir . basename($_FILES['prova']['name']);

    if (move_uploaded_file($_FILES['prova']['tmp_name'], $uploadFile)) {
        $usuario_id = $_SESSION['usuario_id'];
        $stmt = $conn->prepare("INSERT INTO provas (usuario_id, caminho_imagem) VALUES (?, ?)");
        $stmt->execute([$usuario_id, $uploadFile]);

        echo "<div class='container'>";
        echo "<h2>Arquivo enviado com sucesso!</h2>";
        echo "<p>Foto salva em: $uploadFile</p>";
        echo "<a href='index2.html'>Voltar</a>";
        echo "</div>";
    } else {
        echo "<div class='container'><p style='color:red;'>Erro ao enviar o arquivo.</p></div>";
    }
}
?>