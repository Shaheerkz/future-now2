<?php include "includes/head.php"; ?>
<!-- <?php include "includes/header.php"; ?> -->

<body>
    <div class="mainWrapper">
        <?php include "includes/aside.php"; ?>
        <main class="main">
            <div class="container-fluid">
            <?php include "includes/header.php"; ?>
            <h2 class="dashboard-hd">dashboard</h2>
                <div class="cardsWrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5>89,935</h5>
                                    <div class="user-icon">
                                        <img src="./assets/images//users.svg" alt="">
                                    </div>
                                </div>
                                <p class="users">Total users</p>
                                <p><img src="./assets/images/up.svg" alt=""><span>10.2</span>+1.01% this week</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5>89,935</h5>
                                    <div class="user-icon">
                                        <img src="./assets/images//users.svg" alt="">
                                    </div>
                                </div>
                                <p class="users">Total users</p>
                                <p><img src="./assets/images/up.svg" alt=""><span>10.2</span>+1.01% this week</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5>89,935</h5>
                                    <div class="user-icon">
                                        <img src="./assets/images//users.svg" alt="">
                                    </div>
                                </div>
                                <p class="users">Total users</p>
                                <p><img src="./assets/images/up.svg" alt=""><span>10.2</span>+1.01% this week</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="graph">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <h3 class="table-hd">Latest Users</h3>
                                <div class="d-flex justify-content-end align-items-center gap-4">
                                    <div class="status status1"><span class="status-indicate"></span>Offline orders</div>
                                    <div class="status"><span class="status-indicate"></span>Online orders</div>
                                    <label class="wrap">
                                        <select name="Monthly" id="filter" class="filter">
                                            <option value="Monthly">Monthly</option>
                                            <option value="Yearly">Yearly</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Monthly">Monthly</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="donut">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="table-hd">Earnings</h3>
                                <img src="./assets/images/more.svg" alt="">
                            </div>
                            <canvas class="chart__canvas" id="chartCanvas" width="160" height="160" aria-label="Example doughnut chart showing data as a percentage" role="img"></canvas>
                        </div>
                    </div>
                </div>
                <div class="user-table mt-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="table-hd">Latest Users</h3>
                        <label class="wrap">
                            <select name="Monthly" id="filter" class="filter">
                                <option value="Monthly">Monthly</option>
                                <option value="Yearly">Yearly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Monthly">Monthly</option>
                            </select>
                        </label>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="col">S.No</th>
                                <th scope="col" class="col">Name<img src="./assets/images/arrows.svg" alt=""></th>
                                <th scope="col" class="col">Date</th>
                                <th scope="col" class="col">Type</th>
                                <th scope="col" class="col">Email<img src="./assets/images/arrows.svg" alt=""></th>
                                <th scope="col" class="col">Status<img src="./assets/images/arrows.svg" alt=""></th>
                                <th scope="col" class="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="user-name">Mark</td>
                                <td>Nov 15, 2023</td>
                                <td>Subscriber</td>
                                <td>Info@abc.com</td>
                                <td class="status"><span class="status-indicate"></span>Active</td>
                                <td>
                                    <img src="./assets/images/more.svg" alt="">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td class="user-name">Mark</td>
                                <td>Nov 15, 2023</td>
                                <td>Subscriber</td>
                                <td>Info@abc.com</td>
                                <td class="status"><span class="status-indicate"></span>Active</td>
                                <td>
                                    <img src="./assets/images/more.svg" alt="">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td class="user-name">Mark</td>
                                <td>Nov 15, 2023</td>
                                <td>Subscriber</td>
                                <td>Info@abc.com</td>
                                <td class="status"><span class="status-indicate inactive"></span>Inactive</td>
                                <td>
                                    <img src="./assets/images/more.svg" alt="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
<?php include "includes/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const data = [];
    const data2 = [];
    let prev = 100;
    let prev2 = 80;
    for (let i = 0; i < 1000; i++) {
        prev += 5 - Math.random() * 10;
        data.push({
            x: i,
            y: prev
        });
        prev2 += 5 - Math.random() * 10;
        data2.push({
            x: i,
            y: prev2
        });
    }
    // Data-----

    // Animation-----
    const totalDuration = 5000;
    const delayBetweenPoints = totalDuration / data.length;
    const previousY = (ctx) => ctx.index === 0 ? ctx.chart.scales.y.getPixelForValue(100) : ctx.chart.getDatasetMeta(ctx.datasetIndex).data[ctx.index - 1].getProps(['y'], true).y;
    const animation = {
        x: {
            type: 'number',
            easing: 'linear',
            duration: delayBetweenPoints,
            from: NaN, // the point is initially skipped
            delay(ctx) {
                if (ctx.type !== 'data' || ctx.xStarted) {
                    return 0;
                }
                ctx.xStarted = true;
                return ctx.index * delayBetweenPoints;
            }
        },
        y: {
            type: 'number',
            easing: 'linear',
            duration: delayBetweenPoints,
            from: previousY,
            delay(ctx) {
                if (ctx.type !== 'data' || ctx.yStarted) {
                    return 0;
                }
                ctx.yStarted = true;
                return ctx.index * delayBetweenPoints;
            }
        }
    };
    // Animation-----

    // Config-----
    const config = {
        type: 'line',
        data: {
            datasets: [{
                    borderColor: "#FF9500",
                    borderWidth: 1,
                    radius: 0,
                    data: data,
                },
                {
                    borderColor: "#347AE2",
                    borderWidth: 1,
                    radius: 0,
                    data: data2,
                }
            ]
        },
        options: {
            animation,
            interaction: {
                intersect: false
            },
            plugins: {
                legend: false
            },
            scales: {
                x: {
                    type: 'linear'
                }
            }
        }
    };
    // Config-----


    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    // var ctx = document.getElementById('myChart').getContext("2d");

    // var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    // gradientStroke.addColorStop(0, '#80b6f4');
    // gradientStroke.addColorStop(1, '#f49080');

    // var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
    // gradientFill.addColorStop(0, "rgba(128, 182, 244, 0.6)");
    // gradientFill.addColorStop(1, "rgba(244, 144, 128, 0.6)");

    // var myChart = new Chart(ctx, {
    //   type: 'line',
    //   data: {
    //     labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL"],
    //     datasets: [{
    //       label: "Data",
    //       borderColor: gradientStroke,
    //       pointBorderColor: gradientStroke,
    //       pointBackgroundColor: gradientStroke,
    //       pointHoverBackgroundColor: gradientStroke,
    //       pointHoverBorderColor: gradientStroke,
    //       pointBorderWidth: 10,
    //       pointHoverRadius: 10,
    //       pointHoverBorderWidth: 1,
    //       pointRadius: 3,
    //       fill: true,
    //       backgroundColor: gradientFill,
    //       borderWidth: 4,
    //       data: [100, 120, 150, 170, 180, 170, 160] }] },


    //   options: {
    //     animation: {
    //       easing: "linear" },

    //     legend: {
    //       position: "bottom" },

    //     scales: {
    //       yAxes: [{
    //         ticks: {
    //           fontColor: "rgba(0,0,0,0.5)",
    //           fontStyle: "bold",
    //           beginAtZero: true,
    //           maxTicksLimit: 5,
    //           padding: 20 },

    //         gridLines: {
    //           drawTicks: false,
    //           display: false } }],



    //       xAxes: [{
    //         gridLines: {
    //           zeroLineColor: "transparent" },

    //         ticks: {
    //           padding: 20,
    //           fontColor: "rgba(0,0,0,0.5)",
    //           fontStyle: "bold" } }] } } });
    //# sourceURL=pen.js
    
</script>
<script>
    const config2 = {
  type: 'pie',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        labels: {
          generateLabels: function(chart) {
            // Get the default label list
            const original = Chart.overrides.pie.plugins.legend.labels.generateLabels;
            const labelsOriginal = original.call(this, chart);

            // Build an array of colors used in the datasets of the chart
            let datasetColors = chart.data.datasets.map(function(e) {
              return e.backgroundColor;
            });
            datasetColors = datasetColors.flat();

            // Modify the color and hide state of each label
            labelsOriginal.forEach(label => {
              // There are twice as many labels as there are datasets. This converts the label index into the corresponding dataset index
              label.datasetIndex = (label.index - label.index % 2) / 2;

              // The hidden state must match the dataset's hidden state
              label.hidden = !chart.isDatasetVisible(label.datasetIndex);

              // Change the color to match the dataset
              label.fillStyle = datasetColors[label.index];
            });

            return labelsOriginal;
          }
        },
        onClick: function(mouseEvent, legendItem, legend) {
          // toggle the visibility of the dataset from what it currently is
          legend.chart.getDatasetMeta(
            legendItem.datasetIndex
          ).hidden = legend.chart.isDatasetVisible(legendItem.datasetIndex);
          legend.chart.update();
        }
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            const labelIndex = (context.datasetIndex * 2) + context.dataIndex;
            return context.chart.data.labels[labelIndex] + ': ' + context.formattedValue;
          }
        }
      }
    }
  },
};
</script>