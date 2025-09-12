<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: /php/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Aluno - Provão</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f6f9;
      color: #242323ff;
    }

header {
  background: #000000ff;
  color: white;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

header h1 {
  margin: 0;
  font-size: 28px;
  text-align: center;
  flex: 1;
}

header a {
  text-decoration: none;
  color: white;
  background-color: #000000;
  padding: 8px 15px;
  border-radius: 6px;
  font-weight: 500;
  transition: 0.3s;
}

header a:hover {
  background: #00aaff;
  color: #fff;
  transform: scale(1.05);
}


    .cards {
      display: flex;
      gap: 20px;
      justify-content: center;
      margin: 30px auto;
      max-width: 1000px;
    }

    .card {
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      text-align: center;
      flex: 1;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h2 {
      margin-bottom: 10px;
      font-size: 20px;
      color: #555;
    }

    .card p {
      font-size: 26px;
      font-weight: bold;
      color: #2c3e50;
    }

    .charts {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      margin: 0 auto 40px auto;
      max-width: 1000px;
      padding: 0 20px;
    }

    .chart-container {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .chart-container h3 {
      text-align: center;
      margin-bottom: 15px;
      font-size: 18px;
      color: #444;
    }

    .tabela-container {
      max-width: 800px;
      margin: 0 auto 50px auto;
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    table th, table td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }

    table th {
      background: #f0f0f0;
      font-weight: bold;
    }

    footer {
      background: #000000ff;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
    }
    header a:hover {
    background: #00aaff;
    color: #fff;
    transform: scale(1.05);
}

.mensagem-usuario {
  text-align: left;
  font-size: 20px;
  margin-top: 15px;
  margin-left: 20px;
  color: #444;
}


  </style>
</head>
<body>
<header>
  <a href="../index/index3.php" 
     style="text-decoration: none; 
            color: white; 
            background-color: #000000; 
            padding: 8px 15px; 
            border-radius: 6px; 
            font-weight: 500; 
            transition: 0.3s;">
    Voltar
  </a>
  <h1>📄 Resultado do Provão - 2025</h1>
  <div style="width: 80px;"></div> <!-- placeholder para equilibrar o flex -->
</header>

<p class="mensagem-usuario">
  Notas para o aluno <strong><?php echo htmlspecialchars($_SESSION['usuario_nome']); ?></strong>
</p>

  <!-- Resumo -->
  <div class="cards">
    <div class="card">
      <h2>Nota Final</h2>
      <p>MB</p>
    </div>
    <div class="card">
      <h2>Acertos</h2>
      <p>80 / 90</p>
    </div>
    <div class="card">
      <h2>Percentual</h2>
      <p>88,9%</p>
    </div>
  </div>

  <!-- Gráficos -->
  <div class="charts">
    <div class="chart-container">
      <h3>Acertos x Erros</h3>
      <canvas id="pizzaChart"></canvas>
    </div>
    <div class="chart-container">
      <h3>Desempenho por Matéria</h3>
      <canvas id="materiasChart"></canvas>
    </div>
  </div>

  <!-- Questões erradas -->
  <div class="tabela-container">
    <h3>Questões Erradas</h3>
    <table>
      <thead>
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

  <footer>
    © 2025 Provão ETEC - Centro Paula Souza
  </footer>

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

    // Gráfico de Barras: Desempenho por Matéria
    new Chart(document.getElementById('materiasChart'), {
      type: 'bar',
      data: {
        labels: ['Português', 'Matemática', 'História', 'Ciências'],
        datasets: [{
          label: 'Acertos',
          data: [30, 18, 20, 8],
          backgroundColor: ['#3498db', '#9b59b6', '#f1c40f', '#e67e22']
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Acertos por Matéria'
          }
        },
        scales: {
          y: { beginAtZero: true, max: 90 }
        }
      }
    });
  </script>
</body>
</html>
