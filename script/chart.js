// Department Population Chart
const deptPopulationChart = document.getElementById('deptPopulationChart');
if (deptPopulationChart) {
    const deptPopulationData = {
        labels: ['CSD', 'CET', 'CBA', 'CAS'],
        datasets: [{
            label: 'Population',
            data: [1000, 1500, 2000, 2500],
            backgroundColor: ['#4FD1C5', '#63B3ED', '#FBBF24', '#F472B6'],
            borderColor: ['#4FD1C5', '#63B3ED', '#FBBF24', '#F472B6'],
            borderWidth: 1
        }]
    };
    const deptPopulationOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: false
            }
        }
    };
    const deptPopulationChartInstance = new Chart(deptPopulationChart, {
        type: 'bar',
        data: deptPopulationData,
        options: deptPopulationOptions
    });
}


// Student Status Chart
const studentStatusChart = document.getElementById('studentStatusChart');
if (studentStatusChart) {
    const studentStatusData = {
        labels: ['Working', 'Regular', 'Irregular'],
        datasets: [{
            label: 'Status',
            data: [3000, 2500, 1500],
            backgroundColor: ['#4FD1C5', '#63B3ED', '#F472B6'],
            borderColor: ['#4FD1C5', '#63B3ED', '#F472B6'],
            borderWidth: 1
        }]
    };
    const studentStatusOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
            }
        }
    };
    const studentStatusChartInstance = new Chart(studentStatusChart, {
        type: 'doughnut',
        data: studentStatusData,
        options: studentStatusOptions
    });
}

// Enrollee Chart
const enrolleeChart = document.getElementById('enrolleeChart');
if (enrolleeChart) {
    const enrolleeData = {
        labels: ['New', 'Transferee', 'Continuing', 'Returnee'],
        datasets: [{
            label: 'Enrollees',
            data: [1000, 800, 1200, 700],
            backgroundColor: ['#4FD1C5', '#63B3ED', '#FBBF24', '#F472B6'],
            borderColor: ['#4FD1C5', '#63B3ED', '#FBBF24', '#F472B6'],
            borderWidth: 1
        }]
    };
    const enrolleeOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
            }
        }
    };
    const enrolleeChartInstance = new Chart(enrolleeChart, {
        type: 'doughnut',
        data: enrolleeData,
        options: enrolleeOptions
    });
}

// Scholarship Chart
// Scholarship Chart
const scholarshipChart = document.getElementById('scholarshipChart');
if (scholarshipChart) {
    const scholarshipData = {
        labels: ['Academic', 'Sports', 'Cultural', 'Social'],
        datasets: [{
            label: 'Scholarships',
            data: [500, 300, 200, 100],
            backgroundColor: ['#4FD1C5', '#63B3ED', '#FBBF24', '#F87171'],
            borderWidth: 1
        }]
    };

    const scholarshipChartConfig = {
        type: 'pie',
        data: scholarshipData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        font: {
                            size: 14,
                            family: 'Poppins',
                            weight: 'bold'
                        }
                    }
                }
            }
        }
    };

    new Chart(scholarshipChart, scholarshipChartConfig);
}

// Render charts
const deptPopulationCtx = document.getElementById("deptPopulationChart")?.getContext("2d");
if (deptPopulationCtx) {
    new Chart(deptPopulationCtx, deptPopulationChartConfig);
}

const studentStatusCtx = document.getElementById("studentStatusChart")?.getContext("2d");
if (studentStatusCtx) {
    new Chart(studentStatusCtx, studentStatusChartConfig);
}

const enrolleeCtx = document.getElementById("enrolleeChart")?.getContext("2d");
if (enrolleeCtx) {
    new Chart(enrolleeCtx, enrolleeChartConfig);
}

const scholarshipCtx = document.getElementById("scholarshipChart")?.getContext("2d");
if (scholarshipCtx) {
    new Chart(scholarshipCtx, scholarshipChartConfig);
}
