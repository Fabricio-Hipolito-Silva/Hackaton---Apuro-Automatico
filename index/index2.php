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
</head>
<body>

  
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
        <td class="celula-ensino-medio">80%</td>
        <td class="celula-ensino-tecnico">40%</td>
      </tr>
      <tr class="linha">
        <td class="celula-turma">2 Min</td>
        <td class="celula-ensino-medio">65%</td>
        <td class="celula-ensino-tecnico">25%</td>
      </tr>
      <tr class="linha">
        <td class="celula-turma">3 Min</td>
        <td class="celula-ensino-medio">70%</td>
        <td class="celula-ensino-tecnico">35%</td>
      </tr>
    
  </table>

  <footer>
 <p>© 2025 Provão ETEC - Centro Paula Souza</p>
</footer>

</section>
</body>
</html>
