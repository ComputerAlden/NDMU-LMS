const gradeGraph = document.getElementById('gradeGraph');
if (gradeGraph) {
    const gradeData = {
        labels: ['Web Development', 'Database Management', 'Networking', 'Programming', 'Operating Systems'],
        datasets: [{
            label: 'Grade',
            data: [4, 3, 2, 5, 3],
            backgroundColor: ['#4FD1C5', '#63B3ED', '#FBBF24', '#F472B6', '#4C51BF'],
            borderColor: ['#4FD1C5', '#63B3ED', '#FBBF24', '#F472B6', '#4C51BF'],
            borderWidth: 1
        }]
    };
    const gradeOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 1,
                    suggestedMax: 5,
                    callback: function(value, index, values) {
                        return value + ' - ' + (value - 1);
                    }
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Grade'
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Subjects'
                }
            }]
        },
        plugins: {
            legend: {
                display: false
            }
        }
    };
    const gradeChart = new Chart(gradeGraph, {
        type: 'bar',
        data: gradeData,
        options: gradeOptions
    });
}
