var ctx = document.getElementById("cctotal").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Total Achivement"],
        datasets: [{
                label: '# Click',
                data: [50, 100],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)'
                ],
                borderWidth: 1
            },
            {
                label: '# Conversation',
                data: [25, 100],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
    },
    options: {
        scales: {
            yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
        }
    }
});

var ctx = document.getElementById("indevidual").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"],
        datasets: [
            {
                label: '=> Conversation',
                data: [8, 70, 50, 55, 65, 45, 40, 0, 0, 0, 80, 75, 65, 35, 20, 60, 70, 50, 55, 65, 45, 40, 80, 85, 95, 80, 75, 65, 35, 20, 15, 100],
                backgroundColor: [

                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [

                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            },
            {
                label: '=> Click',
                data: [10, 55, 65, 45, 40, 80, 85, 95, 80, 75, 65, 35, 20, 60, 100, 50, 55, 65, 45, 40, 80, 85, 0, 0, 90, 0, 0, 20, 50, 90, 3, 100],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)'
                ],
                borderWidth: 1
            }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
        }
    }
});