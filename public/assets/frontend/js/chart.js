var options = {
    chart: {
        height: 350,
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: '22px',
                },
                value: {
                    fontSize: '16px',
                },
                total: {
                    show: true,
                    label: 'Total',
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 80
                    }
                }
            }
        }
    },
    series: [50, 30, 20],
    labels: ['Completed', 'Upcoming', 'Cancelled'],
    colors:['#fa4962', '#379cf9', '#a264ff'],
    stroke: {
        lineCap: "round",
    }

}

var chart = new ApexCharts(
    document.querySelector("#chart"),
    options
);

chart.render();
