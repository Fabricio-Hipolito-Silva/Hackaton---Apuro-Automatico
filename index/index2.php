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
    background-color: transparent; /* mesmo fundo da navbar */
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    cursor: pointer;
    font-weight: 500;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.dropbtn:hover {
    background-color: rgba(255,255,255,0.1); /* efeito igual aos links da navbar */
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #000; /* mesmo fundo da navbar */
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
    background-color: rgba(255,255,255,0.1); /* mesmo hover dos links */
}

/* Toggle display com JS */
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
          <a href="#processo">Processo</a>
          <a href="#nota">Nota do Provão</a>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Menu ▼</button>
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
      link.addEventListener('click', function(e){
        e.preventDefault();
        const alvo = this.getAttribute('href');

        if(alvo === "#inicio"){
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else if(alvo === "#processo"){
          const secao = document.querySelector('.container_graficos');
          if(secao) secao.scrollIntoView({ behavior:'smooth', block:'start' });
        } else if(alvo === "#nota") {
          const secao = document.querySelector('.container_2025');
          if(secao) secao.scrollIntoView({ behavior:'smooth', block:'start' });
        }
      });
    });
  </script>

  <!-- ================== SCRIPT GRÁFICOS ================== -->
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

    criarGraficoLinha("linha1"); // Apenas um gráfico de linha comparativo
  </script>
</body>
</html>
