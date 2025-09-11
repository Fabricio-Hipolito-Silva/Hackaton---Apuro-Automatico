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
    <link rel="stylesheet" href="/style/style2.css">

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
         <a href="#nota">Nota do Provão</a>
         <a href="#processo">Processo</a>
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
             Imagem Ilustrativa do Provão Nacional
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

    <section class="container_graficos">
      <h2 class="titulo">Desempenho acadêmico dos alunos nos últimos anos:</h2>
  
  <div>
   <canvas class="grafico_inicial" >

   </canvas>
  </div>
  
  <div>
   <canvas class="grafico_inicial" >

   </canvas>
  </div>
  
  <div>
   <canvas class="grafico_inicial" >

   </canvas>
  </div>
</section>

<section class="container_2025">
<h2 class="titulo">2025</h2>

<div class="boxs">

<div class="box, box_1">
    <h3>Percentual geral</h3>
    <h3>100%</h3>
</div>

<div class="box, box_2">
    <h3>Percentual ensino médio</h3>
    <h3>40%</h3>
</div>

<div class="box, box_3">
    <h3>Percentual base técnica</h3>
    <h3>60%</h3>
</div>

</div>

<div class="grafico_2025">
    <canvas class="grafico_inicial, grafico_2025" >

    </canvas>

</div>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Desempenho Acadêmico</title>
</head>
<body>

  
  <table class="tabela">
    <thead class="tabela-cabecalho">
      <tr>
        <th class="coluna-turma">Turma</th>
        <th class="coluna-ensino-medio">Ensino Médio</th>
        <th class="coluna-ensino-tecnico">Ensino Técnico</th>
      </tr>
    </thead>
    
      <tr class="linha">
        <td class="celula-turma">1 Min</td>
        <td class="celula-ensino-medio">65%</td>
        <td class="celula-ensino-tecnico">35%</td>
      </tr>
      <tr class="linha">
        <td class="celula-turma">2 Min</td>
        <td class="celula-ensino-medio">75%</td>
        <td class="celula-ensino-tecnico">25%</td>
      </tr>
      <tr class="linha">
        <td class="celula-turma">3 Min</td>
        <td class="celula-ensino-medio">65%</td>
        <td class="celula-ensino-tecnico">35%</td>
      </tr>
    
  </table>


  <section class="container_2024">
<h2 class="titulo">2024</h2>

<div class="boxs">

<div class="box, box_4">
    <h3>Percentual geral</h3>
    <h3>100%</h3>
</div>

<div class="box, box_5">
    <h3>Percentual ensino médio</h3>
    <h3>70%</h3>
</div>

<div class="box, box_6">
    <h3>Percentual base técnica</h3>
    <h3>30%</h3>
</div>

</div>

<div class="grafico_2024">
    <canvas class="grafico_inicial, grafico_2024" >

    </canvas>

</div>


  <h2 class="titulo">Percentual de alunos por turma</h2>
  
  <table class="tabela">
    <thead class="tabela-cabecalho">
      <tr>
        <th class="coluna-turma">Turma</th>
        <th class="coluna-ensino-medio">Ensino Médio</th>
        <th class="coluna-ensino-tecnico">Ensino Técnico</th>
      </tr>
    </thead>
    
      <tr class="linha">
        <td class="celula-turma">1 Min</td>
        <td class="celula-ensino-medio">80%</td>
        <td class="celula-ensino-tecnico">20%</td>
      </tr>
      <tr class="linha">
        <td class="celula-turma">2 Min</td>
        <td class="celula-ensino-medio">65%</td>
        <td class="celula-ensino-tecnico">35%</td>
      </tr>
      <tr class="linha">
        <td class="celula-turma">3 Min</td>
        <td class="celula-ensino-medio">70%</td>
        <td class="celula-ensino-tecnico">30%</td>
      </tr>
    
  </table>

    <section class="container_2023">
<h2 class="titulo">2023</h2>

<div class="boxs">

<div class="box, box_7">
    <h3>Percentual geral</h3>
    <h3>100%</h3>
</div>

<div class="box, box_8">
    <h3>Percentual ensino médio</h3>
    <h3>60%</h3>
</div>

<div class="box, box_9">
    <h3>Percentual base técnica</h3>
    <h3>40%</h3>
</div>

</div>

<div class="grafico_2023">
    <canvas class="grafico_inicial, grafico_2023" >

    </canvas>

</div>


  
  
  <table class="tabela">
    <thead class="tabela-cabecalho">
      <tr>
        <th class="coluna-turma">Turma</th>
        <th class="coluna-ensino-medio">Ensino Médio</th>
        <th class="coluna-ensino-tecnico">Ensino Técnico</th>
      </tr>
    </thead>
    
      <tr class="linha">
        <td class="celula-turma">1 Min</td>
        <td class="celula-ensino-medio">60%</td>
        <td class="celula-ensino-tecnico">40%</td>
      </tr>
      <tr class="linha">
        <td class="celula-turma">2 Min</td>
        <td class="celula-ensino-medio">50%</td>
        <td class="celula-ensino-tecnico">50%</td>
      </tr>
      <tr class="linha">
        <td class="celula-turma">3 Min</td>
        <td class="celula-ensino-medio">70%</td>
        <td class="celula-ensino-tecnico">30%</td>
      </tr>
    
  </table>

  <footer>
 <p>© 2025 Provão ETEC - Centro Paula Souza</p>
</footer>

</section>
</body>
</html>
</html>