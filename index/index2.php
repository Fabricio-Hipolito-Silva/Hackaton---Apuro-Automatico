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
  <title>Desempenho Acadêmico</title>
  <link rel="stylesheet" href="../style/style3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>


  <div class="fundo">
  <nav class="navbar">
 
 <div class="nav-container">
     <div class="logo">
         <div class="logo-img"></div>
         
    
     <div class="nav-links">
         <a href="#inicio">Início</a>
         <a href="#nota">Nota do Provão</a>
         <a href="#processo">Processo</a>
         <a href="../php/logout.php">Sair</a>
     </div>
 </div>
</nav>
<img src="../images/ProvaTec.jpeg" alt="" class="image">
  </div>
  <div class="container">
    <h1 class="titulo">Desempenho Acadêmico - Informática para Internet</h1>
    <p class="descricao">Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>! Aqui você pode acompanhar o desempenho dos seus alunos de Informática para Internet no Provão ao longo dos anos.</p>

    <section class="container_2025">
      <h2>Desempenho Acadêmico - 2025</h2>

      <!-- Gráfico 1: Percentual geral -->
    <div class="container_2025">
      <h2 class="titulo1">2025</h2>

      <div class="grafico_2025">
        <canvas id="grafico_geral" class="grafico_inicial"></canvas>
      </div>

      <div class="grafico_2025">
        <canvas id="grafico_turmas" class="grafico_inicial"></canvas>
      </div>
    </div>


    <section class="container_2024">
      
  <div class="container_2024">
      <h2 class="titulo1">2024</h2>

      <div class="grafico_2024">
        <canvas id="grafico_c" class="grafico_inicial"></canvas>
      </div>

      <div class="grafico_2024">
        <canvas id="grafico_d" class="grafico_inicial"></canvas>
      </div>
  </div>
  </section>


  <footer>
 <p>© 2025 Provão ETEC - Centro Paula Souza</p>
</footer>
  <script src="../javascript/charts_index2.js" defer></script>
</section>
</body>
</html>