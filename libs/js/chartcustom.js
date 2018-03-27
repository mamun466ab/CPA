$(document).ready(function () {
    $.ajax({
        type: 'POST',
        url: 'http://localhost/OneDrive/cpa/Chart/line_chart',
        datatype: 'json',
        success: function (ccdata) {
            var ccdata = JSON.parse(ccdata);
            console.log(ccdata);
            var ccdate = [];
            var ccclk = [];
            var cccnv = [];

            for (var i in ccdata) {
                ccdate.push(ccdata[i].dt);
                ccclk.push(ccdata[i].clk);
                cccnv.push(ccdata[i].cnv);
            }

            var ctx = $("#indevidual");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ccdate,
                    datasets: [
                        {
                            label: ' Click',
                            data: ccclk,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }
                        ,
                        {
                            label: ' Conversion',
                            data: cccnv,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255,99,132,1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    tooltips: {
                    mode: 'index',
                    intersect: false
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        }
    });
    
    $.ajax({
        type: 'POST',
        url: 'http://localhost/OneDrive/cpa/Chart/bar_chart',
        datatype: 'json',
        success: function (ccttl) {
            var ccttl = JSON.parse(ccttl);
            console.log(ccttl);
            
            var clkttl = [];
            var cnvttl = [];

            for (var i in ccttl) {
                clkttl.push(ccttl[0].clk);
                cnvttl.push(ccttl[1].cnv);
            }

            var ctx = $("#cctotal");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Click and Conversion'],
                    datasets: [
                        {
                            label: ' Click',
                            data: clkttl,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }
                        ,
                        {
                            label: ' Conversion',
                            data: cnvttl,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255,99,132,1)',
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
        }
    });
});