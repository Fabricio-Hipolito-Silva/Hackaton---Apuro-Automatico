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
    <link rel="stylesheet" href="/style/style2.css">
    <style>
        /* Navbar */
        .navbar {
            background-color: #000;
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .nav-links a:hover {
            background-color: rgba(255,255,255,0.1);
        }

        /* Cards de resultado */
        .cards-resultado {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin: 2rem 0;
        }
        .card-resultado {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            flex: 1 1 250px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s;
        }
        .card-resultado:hover {
            transform: translateY(-5px);
        }
        .card-resultado h3 {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
            color: #3949ab;
        }
        .card-resultado p {
            font-size: 1.5rem;
            font-weight: bold;
            color: #000;
        }

        /* Gráficos */
        .graficos-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        .graficos-container canvas {
            background-color: white;
            border-radius: 8px;
            padding: 1rem;
            flex: 1 1 400px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
    </style>
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
        </div>
    </div>
</nav>

<!-- Conteúdo Principal -->
<div class="container" id="inicio">
    <section class="hero">
        <h1>O que é o Provão Etec?</h1>
        <p>
        Provão Avaliativo da ETEC é uma avaliação aplicada aos alunos dos cursos técnicos e do Ensino Médio com Habilitação Técnica integrados ao ETIM
    (Ensino Técnico Integrado ao Médio) nas Escolas Técnicas Estaduais (ETECs) do Centro Paula Souza, em São Paulo.
Esse exame tem como objetivo verificar o desempenho dos estudantes em relação aos conteúdos ensinados durante o curso, ajudando a identificar
tanto os pontos fortes quanto as dificuldades no processo de aprendizagem. 
Ele também serve como uma forma de medir a qualidade do ensino oferecido pela instituição e orientar possíveis melhorias pedagógicas.
        </p>
        <div class="hero-content">
            <div class="hero-text">
                <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                    <li>Avaliar a qualidade dos cursos técnicos oferecidos pelas Etecs.</li>
                    <li>Fornecer indicadores sobre o desempenho acadêmico de cada Etec.</li>
                    <li>Apoiar decisões pedagógicas e institucionais.</li>
                    <li>Promover responsabilidade e transparência das unidades escolares.</li>
                </ul>
            </div>
            <div class="hero-image">
                <img src="https://conteudo.imguol.com.br/c/noticias/7a/2023/12/05/alunos-da-3-serie-do-ensino-medio-fizeram-provao-paulista-nos-dias-29-e-30-de-novembro-1701806565591_v2_3x4.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- Seção Nota do Provão -->
    <section id="nota">
        <h2 style="color:#1a237e; margin-bottom:1rem;">Resultado do Provão 2025</h2>

        <!-- Cards de Resultado -->
        <div class="cards-resultado">
            <div class="card-resultado">
                <h3>Nota Final</h3>
                <p>R</p>
            </div>
            <div class="card-resultado">
                <h3>Acertos</h3>
                <p>40 / 80</p>
            </div>
            <div class="card-resultado">
                <h3>Percentual</h3>
                <p>50%</p>
            </div>
        </div>

        <!-- Gráficos -->
        <div class="graficos-container">
            <canvas id="desempenhoMateria"></canvas>
        </div>
    </section>
</div>

<script>
const ctx2 = document.getElementById('desempenhoMateria').getContext('2d');
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ["Português","Matemática","Artes","Fund. Info","Est. Av. Mat.","Física","Biologia","App Web","Interface Web","Arte Dig.","Química","Prog. Alg.","Ed. Física","Empreed.","Inglês","Ética"], // <-- CORRIGIDO
        datasets: [{
            label: 'Acertos',
            data: [8,7,5,4,5,3,4,5,5,4,3,5,4,5,5,4],
            backgroundColor: '#2196f3'
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true, stepSize: 1 } }
    }
});
</script>
<script>
    // Seleciona todos os links da navbar que começam com #
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // evita o comportamento padrão do link
            const targetId = this.getAttribute('href'); // pega o ID
            const targetSection = document.querySelector(targetId);
            targetSection.scrollIntoView({ behavior: 'smooth' }); // scroll suave
        });
    });
</script>

</body>
</html>
