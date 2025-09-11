<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../php/loginprofessor.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Professor</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    a {
        background-color: #ff4081;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
        animation: fadeIn 0.6s ease-in-out;
    }
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #2a5298, #1e3c72);
      display: flex;
      align-items: flex-start;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
      text-align: center;
      width: 100%;
      max-width: 1000px;
      animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      margin-bottom: 30px;
      color: #333;
      font-size: 28px;
    }

    .chart-box {
      margin-bottom: 40px;
      padding: 20px;
      border-radius: 12px;
      background: #f9f9f9;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .chart-box h3 {
      margin-bottom: 20px;
      color: #222;
      font-size: 20px;
    }

    canvas {
      width: 100% !important;
      height: 400px !important;
    }

    /* 🔥 Responsividade */
    @media (max-width: 768px) {
      .container {
        padding: 20px;
      }
      h1 {
        font-size: 22px;
      }
      .chart-box {
        padding: 15px;
      }
      canvas {
        height: 300px !important;
      }
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 20px;
      }
      .chart-box h3 {
        font-size: 18px;
      }
      canvas {
        height: 250px !important;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Relatório da Prova (3min)</h1>

    <!-- Ranking de erros -->
    <div class="chart-box">
      <h3>Questões mais erradas</h3>
      <canvas id="rankingErros"></canvas>
    </div>

    <!-- Comparação entre matérias -->
    <div class="chart-box">
      <h3>Comparação entre matérias</h3>
      <canvas id="comparacaoMaterias"></canvas>
    </div>
      <a href="../../estatisticas.php">Sair</a>

  </div>

  <script>
    const materias = ["Matemática", "Português", "História", "Geografia", "Química", "Física", "Biologia"];
    const mediaTurma = [0, 10, 7, 8, 9, 1, 2];


    // 2. Ranking de questões mais erradas
    new Chart(document.getElementById("rankingErros"), {
      type: "bar",
      data: {
        labels: ["Q5", "Q12", "Q27", "Q33", "Q48"],
        datasets: [{
          label: "Erros",
          data: [40, 35, 29, 38, 25],
          backgroundColor: "#ff4081"
        }]
      },
      options: {
        indexAxis: "y",
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: { x: { beginAtZero: true, max: 40 } }
      }
    });

    // 3. Comparação entre matérias
    new Chart(document.getElementById("comparacaoMaterias"), {
      type: "radar",
      data: {
        labels: materias,
        datasets: [
          {
            label: "Média de acertos da turma",
            data: mediaTurma,
            borderColor: "#ff4081",
            backgroundColor: "rgba(255, 64, 129, 0.3)"
          }
        ]
      },
      options: { 
        responsive: true, 
        maintainAspectRatio: false,
        scales: { r: { beginAtZero: true, max: 10 } } 
      }
    });
  </script>
</body>
</html>
