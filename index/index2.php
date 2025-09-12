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
  <link rel="stylesheet" href="/style/style3.css">
  <link rel="icon" href="/images/favicon.png" type="image/jpeg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Biblioteca Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    /* Navbar fixa e centralizada */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: rgba(0,0,0,0.9);
      color: white;
      padding: 1rem 2rem;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      z-index: 1000;
    }
    .nav-container {
      display: flex;
      justify-content: center; /* centraliza horizontalmente */
      align-items: center;
      gap: 2rem;
    }
    .nav-links a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease, transform 0.3s ease;
      padding: 0.5rem 1rem;
      border-radius: 4px;
    }
    .nav-links a:hover {
      background-color: rgba(255,255,255,0.1);
      transform: scale(1.1);
    }
    /* Dropdown */
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropbtn {
        background-color: transparent;
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        cursor: pointer;
        font-weight: 500;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    .dropbtn:hover {
        background-color: rgba(255,255,255,0.1);
    }
    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #000;
        min-width: 160px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        z-index: 2000;
        flex-direction: column;
    }
    .dropdown-content a {
        color: white;
        text-decoration: none;
        display: block;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        font-weight: 500;
        transition: background-color 0.3s;
    }
    .dropdown-content a:hover {
        background-color: rgba(255,255,255,0.1);
    }
    .dropdown.show .dropdown-content {
        display: flex;
    }
  </style>
</head>
<body>

  <div class="fundo">
    <nav class="navbar">
      <div class="nav-container">
        <div class="logo">
          <div class="logo-img"></div>
        </div>
        <div class="nav-links">
          <a href="#inicio">Início</a>
          <a href="#nota">Nota do Provão</a>
          <a href="/php/logout.php">Sair</a>
        </div>
        <div class="dropdown">
          <div class="dropdown-content">
            <a href="#">Perfil</a>
            <a href="#">Configurar</a>
            <a href="/php/index.php">Desconectar</a>
          </div>
        </div>
      </div>
    </nav>
    <img src="/images/ProvaTec.jpeg" alt="" class="image">
  </div>

  <!-- ================== SEÇÃO GRÁFICO INICIAL (Processo) ================== -->
  <section id="processo" class="container_graficos">
    <p class="titulo">Comparativo de desempenho dos alunos nos últimos anos:</p>
    <div>
      <canvas id="linha1"></canvas>
    </div>
  </section>

  <!-- ================== SEÇÃO 2025 ================== -->
  <section id="nota" class="container_2025">
    <h2 class="titulo1">2025</h2><br>
    <div class="boxs">
      <div class="box"><h3 class="center">Percentual geral</h3><h3 class="center1">100%</h3></div>
      <div class="box box_2"><h3 class="center2">Percentual ensino médio</h3><h3 class="center3">40%</h3></div>
      <div class="box box_3"><h3 class="center4">Percentual base técnica</h3><h3 class="center5">60%</h3></div>
    </div>
    <div class="grafico_2025">
      <canvas id="grafico2025"></canvas>
    </div>
  </section>

  <!-- ================== SEÇÃO 2024 ================== -->
  <section class="container_2024">
    <h2 class="titulo1 titulo2">2024</h2>
    <div class="boxs">
      <div class="box box_4"><h3 class="center">Percentual geral</h3><h3 class="center5">100%</h3></div>
      <div class="box box_5"><h3 class="center4">Percentual ensino médio</h3><h3 class="center5">70%</h3></div>
      <div class="box box_6"><h3 class="center4">Percentual base técnica</h3><h3 class="center5">30%</h3></div>
    </div>
    <div class="grafico_2024">
      <canvas id="grafico2024"></canvas>
    </div>
  </section>

  <!-- ================== SEÇÃO 2023 ================== -->
  <section class="container_2023">
    <h2 class="titulo1">2023</h2>
    <div class="boxs">
      <div class="box box_7"><h3 class="center">Percentual geral</h3><h3 class="center5">100%</h3></div>
      <div class="box box_8"><h3 class="center4">Percentual ensino médio</h3><h3 class="center5">60%</h3></div>
      <div class="box box_9"><h3 class="center4">Percentual base técnica</h3><h3 class="center5">40%</h3></div>
    </div>
    <div class="grafico_2023">
      <canvas id="grafico2023"></canvas>
    </div>
  </section>

  <section class="container_2023"><h1>Correção Automatizada</h1>
  <!-- Botão que abre o modal -->
  <div class="text-center my-4">  
  <button type="button" class="btn-corrigir" data-bs-toggle="modal" data-bs-target="#corrigirModal">
  Corrigir Provas
</button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="corrigirModal" tabindex="-1" aria-labelledby="corrigirModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="corrigirModalLabel">Corrigir Prova</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="modal-body">
          <form action="index2.php" method="POST" enctype="multipart/form-data">
            <!-- RM -->
            <div class="mb-3">
              <label for="rm" class="form-label">RM do Aluno</label>
              
              <input placeholder="00000" type="text" class="form-control" id="rm" name="rm" required>
            </div>
            <!-- Upload -->
            <div class="mb-3">
              <label for="foto" class="form-label">Enviar Foto da Prova</label>
              <input class="form-control" type="file" id="foto" name="foto" accept="image/*" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-success">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Seção Nota do Provão (oculta inicialmente) -->
<!-- Seção Nota do Provão (exibida após envio do formulário) -->
<section id="resultado-provao" style="display:none; padding: 2rem;">
  <h2 style="color:#1a237e; margin-bottom:1rem;">Resultado do Provão 2025</h2>

  <!-- Cards de Resultado -->
  <div class="cards-resultado" style="display:flex; gap:2rem; flex-wrap:wrap; margin-bottom: 2rem;">
    <div class="card-resultado" style="flex:1; background:#fff; padding:1rem; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.1); text-align:center;">
      <h3>Nota Final</h3>
      <p>MB</p>
    </div>
    <div class="card-resultado" style="flex:1; background:#fff; padding:1rem; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.1); text-align:center;">
      <h3>Acertos</h3>
      <p>80 / 90</p>
    </div>
    <div class="card-resultado" style="flex:1; background:#fff; padding:1rem; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.1); text-align:center;">
      <h3>Percentual</h3>
      <p>88,9%</p>
    </div>
  </div>

  <!-- Gráfico por matéria (já existente) -->
  <div class="graficos-container" style="margin-bottom: 3rem;">
    <canvas id="desempenhoMateria"></canvas>
  </div>

  <!-- NOVOS GRÁFICOS: Pizza e Barras -->
  <div class="row" style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center; margin-bottom: 2rem;">
    <div style="flex:1; min-width: 300px; background: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
      <h4 style="text-align:center;">Acertos x Erros</h4>
      <canvas id="pizzaChart"></canvas>
    </div>

  <!-- Tabela de Questões Erradas -->
  <div class="tabela-container" style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 900px; margin: 0 auto;">
    <h4 style="margin-bottom: 1rem;">Questões Erradas</h4>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>Questão</th>
          <th>Sua Resposta</th>
          <th>Resposta Correta</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Q2</td><td>B</td><td>C</td></tr>
        <tr><td>Q5</td><td>D</td><td>A</td></tr>
        <tr><td>Q8</td><td>A</td><td>B</td></tr>
        <tr><td>Q11</td><td>C</td><td>D</td></tr>
        <tr><td>Q14</td><td>A</td><td>B</td></tr>
        <tr><td>Q17</td><td>D</td><td>C</td></tr>
        <tr><td>Q21</td><td>B</td><td>A</td></tr>
        <tr><td>Q24</td><td>C</td><td>D</td></tr>
        <tr><td>Q27</td><td>A</td><td>C</td></tr>
        <tr><td>Q30</td><td>D</td><td>B</td></tr>
      </tbody>
    </table>
  </div>
</section>
  <footer>
    <p>© 2025 Provão ETEC - Centro Paula Souza</p>
  </footer>
  
  <!-- ================== SCRIPT NAVBAR E DROPDOWN ================== -->
  <script>
    const dropdown = document.querySelector('.dropdown');
    const dropContent = document.querySelector('.dropdown-content');
    dropdown.addEventListener('click', e => {
      e.stopPropagation();
      dropContent.style.display = dropContent.style.display === 'block' ? 'none' : 'block';
    });
    document.addEventListener('click', () => { dropContent.style.display = 'none'; });
    document.querySelectorAll('.nav-links a').forEach(link => {
  link.addEventListener('click', function(e) {
    const alvo = this.getAttribute('href');

    // Se for um link âncora, trata com scroll suave
    if (alvo.startsWith("#")) {
      e.preventDefault();

      if (alvo === "#inicio") {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      } else if (alvo === "#processo") {
        const secao = document.querySelector('.container_graficos');
        if (secao) secao.scrollIntoView({ behavior: 'smooth', block: 'start' });
      } else if (alvo === "#nota") {
        const secao = document.querySelector('.container_2025');
        if (secao) secao.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
    // Se não começar com "#", deixa o link funcionar normalmente (como /php/logout.php)
  });
});
  </script>

  <!-- ================== SCRIPT GRÁFICOS ================== -->
  <script>
  // Gráfico de Pizza: Acertos x Erros
  new Chart(document.getElementById('pizzaChart'), {
    type: 'doughnut',
    data: {
      labels: ['Acertos', 'Erros'],
      datasets: [{
        data: [80, 10],
        backgroundColor: ['#2ecc71', '#e74c3c']
      }]
    },
    options: {
      plugins: {
        legend: { position: 'bottom' }
      }
    }
  });

</script>

  <script>
    const materias = ["Português","Matemática","Artes","Fund. Info","Est. Av. Mat.","Física","Biologia","App Web","Interface Web","Arte Dig.","Química","Prog. Alg.","Ed. Física","Empreed.","Inglês","Ética"];
    function normalizarNotas(notas){ return notas.map((v,i)=>(i===0||i===1)?Math.min(v,10):Math.min(v,5)); }
    const notas2025 = normalizarNotas([8,7,5,4,5,3,4,5,5,4,3,5,4,5,5,4]);
    const notas2024 = normalizarNotas([7,6,4,3,5,2,4,4,3,4,3,5,4,3,4,5]);
    const notas2023 = normalizarNotas([6,5,3,4,5,2,3,4,4,3,4,5,3,4,4,3]);

    function criarGraficoBarras(idCanvas,dados,cor){
      new Chart(document.getElementById(idCanvas),{
        type:'bar',
        data:{ labels:materias, datasets:[{label:'Pontuação', data:dados, backgroundColor:cor}] },
        options:{ responsive:true, plugins:{legend:{display:false}}, scales:{y:{beginAtZero:true,max:10, ticks:{stepSize:1}}} }
      });
    }

    function criarGraficoLinha(idCanvas){
      new Chart(document.getElementById(idCanvas),{
        type:'line',
        data:{
          labels:materias,
          datasets:[
            {label:'2025', data:notas2025, borderColor:'rgba(54,162,235,0.8)', fill:false},
            {label:'2024', data:notas2024, borderColor:'rgba(255,206,86,0.8)', fill:false},
            {label:'2023', data:notas2023, borderColor:'rgba(75,192,192,0.8)', fill:false}
          ]
        },
        options:{ responsive:true, plugins:{legend:{position:'top'}}, scales:{y:{beginAtZero:true,max:10}} }
      });
    }

    criarGraficoBarras("grafico2025", notas2025, "rgba(54, 162, 235, 0.6)");
    criarGraficoBarras("grafico2024", notas2024, "rgba(255, 206, 86, 0.6)");
    criarGraficoBarras("grafico2023", notas2023, "rgba(75, 192, 192, 0.6)");

    criarGraficoLinha("linha1"); 
  </script>
  <script>
  document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault(); // impede envio real

    // Fecha o modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('corrigirModal'));
    modal.hide();

    // Exibe a seção de resultado
    const resultadoSection = document.getElementById('resultado-provao');
    resultadoSection.style.display = 'block';

    // Scroll suave até a seção
    resultadoSection.scrollIntoView({ behavior: 'smooth' });

    // Dados fictícios
    const ctx2 = document.getElementById('desempenhoMateria').getContext('2d');
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["Português","Matemática","Artes","Fund. Info","Est. Av. Mat.","Física","Biologia","App Web","Interface Web","Arte Dig.","Química","Prog. Alg.","Ed. Física","Empreed.","Inglês","Ética"],
            datasets: [{
                label: 'Acertos',
                data: [10,10,5,5,5,5,5,5,5,4,1,5,4,5,5,1],
                backgroundColor: '#2196f3'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, max: 10, stepSize: 1 } }
        }
    });
  });

  
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
