
      // ---------- Gráfico 1 (Pizza: Geral Ensino Médio x Técnico) ----------
      const ctx1 = document.getElementById("grafico_geral").getContext("2d");
      new Chart(ctx1, {
        type: "doughnut",
        data: {
          labels: ["Ensino Médio (40%)", "Base Técnica (60%)"],
          datasets: [{
            data: [40, 60],
            backgroundColor: ["#36A2EB", "#000000ff"]
          }]
        },
        options: {
            responsive: true,
          plugins: {
             legend: {
                display: true,
                position: 'top',  // 'top', 'bottom', 'left', 'right'
                labels: {
                    font: {
                        size: 20,   // <- aumenta o tamanho da legenda
                        weight: 'bold' // opcional, deixa em negrito
                    },
                }
            },
            title: {
              display: true,
              text: "Distribuição Geral (%)",
              font: { size : 24, weight: 'bold'  } // Tamanho e peso do título
            }
          }
        }
      });

      // ---------- Gráfico 2 (Barras: Por turma) ----------
      const ctx2 = document.getElementById("grafico_turmas").getContext("2d");
      new Chart(ctx2, {
        type: "bar",
        data: {
          labels: ["1MIN", "2MIN", "3MIN"], // Turmas
          datasets: [
            {
              label: "Ensino Médio",
              data: [65, 75, 65],
              backgroundColor: "rgba(54, 162, 235, 0.7)"
            },
            {
              label: "Base Técnica",
              data: [35, 25, 35],
              backgroundColor: "rgba(0, 0, 0, 0.7)"
            }
          ]
        },
        options: {
          responsive: true,
          plugins: {
                legend: {
                display: true,
                position: 'top',  // 'top', 'bottom', 'left', 'right'
                labels: {
                    font: {
                        size: 20,   // <- aumenta o tamanho da legenda
                        weight: 'bold' // opcional, deixa em negrito
                    },
                }
            },
            title: {
              display: true,
              text: "Percentual de Ensino Médio x Técnico por Turma (%)",
              font: { size : 24, weight: 'bold'  } 
            }
            
          },
          scales: {
            y: {
              beginAtZero: true,
              max: 100,
              title: {
                display: true,
                text: "Percentual (%)"
              }
            },
            x: {
              title: {
                display: true,
                text: "Turmas"
              }
            }
          }
        }
      });


      // ---------- Gráfico 1 (Pizza: Geral Ensino Médio x Técnico) ----------
      const ctx3 = document.getElementById("grafico_c").getContext("2d");
      new Chart(ctx3, {
        type: "doughnut",
        data: {
          labels: ["Ensino Médio (60%)", "Base Técnica (40%)"],
          datasets: [{
            data: [60, 40],
            backgroundColor: ["#36A2EB", "#000000ff"]
          }]
        },
        options: {
            responsive: true,
          plugins: {
             legend: {
                display: true,
                position: 'top',  // 'top', 'bottom', 'left', 'right'
                labels: {
                    font: {
                        size: 20,   // <- aumenta o tamanho da legenda
                        weight: 'bold' // opcional, deixa em negrito
                    },
                }
            },
            title: {
              display: true,
              text: "Distribuição Geral (%)",
              font: { size : 24, weight: 'bold'  } // Tamanho e peso do título
            }
          }
        }
      });

      // ---------- Gráfico 2 (Barras: Por turma) ----------
      const ctx4 = document.getElementById("grafico_d").getContext("2d");
      new Chart(ctx4, {
        type: "bar",
        data: {
          labels: ["1MIN", "2MIN", "3MIN"], // Turmas
          datasets: [
            {
              label: "Ensino Médio",
              data: [50, 55, 55],
              backgroundColor: "rgba(54, 162, 235, 0.7)"
            },
            {
              label: "Base Técnica",
              data: [55, 55, 55],
              backgroundColor: "rgba(0, 0, 0, 0.7)"
            }
          ]
        },
        options: {
          responsive: true,
          plugins: {
                legend: {
                display: true,
                position: 'top',  // 'top', 'bottom', 'left', 'right'
                labels: {
                    font: {
                        size: 20,   // <- aumenta o tamanho da legenda
                        weight: 'bold' // opcional, deixa em negrito
                    },
                }
            },
            title: {
              display: true,
              text: "Percentual de Ensino Médio x Técnico por Turma (%)",
              font: { size : 24, weight: 'bold'  } 
            }
            
          },
          scales: {
            y: {
              beginAtZero: true,
              max: 100,
              title: {
                display: true,
                text: "Percentual (%)"
              }
            },
            x: {
              title: {
                display: true,
                text: "Turmas"
              }
            }
          }
        }
      });



