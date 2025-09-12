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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/javascript/graphic.js" defer></script>
    <link rel="stylesheet" href="../style/style2.css">

</head>
<body>
      <!-- Navbar -->
      <nav class="navbar">
 
 <div class="nav-container">
     <div class="logo">
         <div class="logo-img"></div>
         <div class="logo-text">APURO AUTOMÁTICO</div>
     </div>
     <div class="nav-links">
         <a href="#inicio">Início</a>
         <a href="../php/notas.php">Nota do Provão</a>
         <a href="#processo">Processo</a>
         <a href="../php/logout.php" class="botao-sair">Sair</a>
     </div>
 </div>
</nav>

<!-- Conteúdo Principal -->
<div class="container">
 <section class="hero">
     <h1>O que é o Provão Etec?</h1>
    Provão Avaliativo da ETEC é uma avaliação aplicada aos alunos dos cursos técnicos e do Ensino Médio com Habilitação Técnica integrados ao ETIM
    (Ensino Técnico Integrado ao Médio) nas Escolas Técnicas Estaduais (ETECs) do Centro Paula Souza, em São Paulo.
Esse exame tem como objetivo verificar o desempenho dos estudantes em relação aos conteúdos ensinados durante o curso, ajudando a identificar
tanto os pontos fortes quanto as dificuldades no processo de aprendizagem. 
Ele também serve como uma forma de medir a qualidade do ensino oferecido pela instituição e orientar possíveis melhorias pedagógicas.
     <div class="hero-content">
         <div class="hero-text">
             <p>O Provão Avaliativo da ETEC é uma ferramenta essencial para diversos fins, tais como:
<ul style="margin-left: 1.5rem; margin-top: 1rem;"></ul>
<li>Avaliar a qualidade dos cursos técnicos oferecidos pelas Etecs, identificando o nível de aprendizado dos alunos e a efetividade do ensino;</li>

<li>Ajudar futuros estudantes na escolha do curso e da unidade, ao fornecer indicadores sobre o desempenho acadêmico de cada Etec;</li>

<li>Apoiar políticas de melhoria da educação profissional, ao gerar dados que orientam decisões pedagógicas e institucionais;</li>

<li>Promover a responsabilidade e a transparência (accountability) das unidades escolares, incentivando a busca constante por excelência no ensino técnico:</p></li>
            
         </div>
         <div class="hero-image">
             Imagem Ilustrativa do Provão
         </div>
     </div>
 </section>
 
 <div class="features">
     <div class="feature-card">
         <h3>Objetivos do Provão</h3>
         <p>Avaliar o rendimento dos alunos dos cursos de graduação em relação aos conteúdos programáticos, suas habilidades e competências.</p>
     </div>
     <div class="feature-card">
         <h3>Importância</h3>
         <p>Os resultados influenciam desde a escolha dos estudantes até o credenciamento e recredenciamento de instituições de ensino.</p>

     </div>
      <div class="feature-card">
         <h3>Rendimento Anual</h3>
         <p></p>
     </div>
 </div>
</div>
 
</html>     