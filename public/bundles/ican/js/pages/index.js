var Index = function () {

    // chart 1
    var chart_1 = null;
    var initChat1 = function () {

        var data = [];
        for(let item of chart1_data.data){
            data.push({
                label: item.name,
                value: item.porciento
            });
        }

        chart_1 = Morris.Donut({
            element: "m_chart_revenue_change",
            data: data,
            colors: [mApp.getColor("accent"), mApp.getColor("danger"), mApp.getColor("brand")]
        });
    }

    // chart 2
    var chart2 = null;
    var initChat2 = function () {

        var series = [];
        var labels = [];
        for (let [i, item] of chart2_data.data.entries()) {

            var color = mApp.getColor("accent");
            if(i == 1){
                color = mApp.getColor("warning");
            }
            if(i == 2){
                color = mApp.getColor("brand");
            }

            series.push({value: item.porciento, className: "custom", meta: {color: color}});
            labels.push(item.name)
        }

        chart2 = new Chartist.Pie("#m_chart_profit_share",
            {
                series: series,
                labels: labels
            },
            {
                donut: true,
                donutWidth: 17,
                showLabel: false
            }
        );
        chart2.on("draw", function (e) {
            if ("slice" === e.type) {
                var t = e.element._node.getTotalLength();
                e.element.attr({"stroke-dasharray": t + "px " + t + "px"});
                var a = {
                    "stroke-dashoffset": {
                        id: "anim" + e.index,
                        dur: 1e3,
                        from: -t + "px",
                        to: "0px",
                        easing: Chartist.Svg.Easing.easeOutQuint,
                        fill: "freeze",
                        stroke: e.meta.color
                    }
                };
                0 !== e.index && (a["stroke-dashoffset"].begin = "anim" + (e.index - 1) + ".end"), e.element.attr({
                    "stroke-dashoffset": -t + "px",
                    stroke: e.meta.color
                }), e.element.animate(a, !1)
            }
        })
    }

    // chart 3
    var chart3 = null;
    var initChart3 = function () {

        chart3 = new Chart($("#m_chart_sales_stats"), {
            type: "line",
            data: {
                labels: chart3_data.labels,
                datasets: [{
                    label: "Sales Stats",
                    borderColor: mApp.getColor("brand"),
                    borderWidth: 2,
                    pointBackgroundColor: mApp.getColor("brand"),
                    backgroundColor: mApp.getColor("accent"),
                    pointHoverBackgroundColor: mApp.getColor("danger"),
                    pointHoverBorderColor: Chart.helpers.color(mApp.getColor("danger")).alpha(.2).rgbString(),
                    data: chart3_data.data
                }]
            },
            options: {
                title: {display: false},
                layout: {
                    padding: {
                        left: 10,
                        right: 10,
                        // top: 20,
                        // bottom: 20
                    }
                },
                tooltips: {
                    intersect: false,
                    mode: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                            return '$' + MyApp.formatearNumero(value, 2, '.', ','); // Formatea el valor numérico
                        }
                    },
                    position: 'average'
                },
                legend: {display: false, labels: {usePointStyle: false}},
                responsive: true,
                maintainAspectRatio: false,
                hover: {mode: "index"},
                scales: {
                    xAxes: [{
                        display: false,
                        gridLines: false,
                        scaleLabel: {display: true, labelString: "Month"}
                    }],
                    yAxes: [{display: false, gridLines: false, scaleLabel: {display: true, labelString: "Value"}}]
                },
                elements: {point: {radius: 3, borderWidth: 0, hoverRadius: 8, hoverBorderWidth: 2}}
            }
        });
    }

    //== Public Functions
    return {
        // public functions
        init: function () {
            initChat1();
            initChat2();
            initChart3();
        }
    };
}();