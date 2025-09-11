        const ctx = document.getElementById('canvas').getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['foda-se1', 'foda-se2', 'foda-se3', 'foda-se4', 'foda-se5'],
                datasets: [{
                    label: 'notas',
                    data: [30, 40, 300, 400, 22,],
                    borderWidth: 0,
                    borderRadius: 5,
                    backgroundColor: 'rgb(105, 207, 247)',
                    borderDash: [],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'black',  // Cor das linhas de grade
                            borderDash: [5, 5],  // Linhas tracejadas (5px de linha, 5px de espaço)
                            borderWidth: 1,  // Espessura das linhas de grade
                            lineWidth: 1,  // Espessura das linhas
                        }
                    
                    }
                }   
            }
        });