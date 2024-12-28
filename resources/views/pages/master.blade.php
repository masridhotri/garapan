<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Kunjungan Tamu | RSUD dr DARSONO PACITAN</title>
    <link rel="icon" href="tamplate/assets/img/Logo-RSUD.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
  
    @include('kerangka.style')

</head>

<body id="page-top">

    @include('sidebar.sidebar')

        @include('kerangka.nav')

                        
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><small> <b>Informasi Kunjungan Tamu RSUD dr. Darsono Kabupaten Pacitan</b></small></h1>

                <!-- unduh data ges nanti taruh bawah aja -->
                {{--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}
            </div>

            <!-- Content Row -->
            <div class="row">
               
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Kunjungan (Day)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$haris}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Kunjungan (Week)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$minggus}} </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Kunjungan (Month)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$bulans}}</div>
                                                </div>
                                                <div class="col">
                                                    {{-- <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Keseluruhan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$tamus}} </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        
                    <div class="row col-15 mb-10">
                        <div class="col-xl-10 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Statistik Pengunjung</h6>
                                    <div class="dropdown no-arrow">
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class></div>
                                            </div>
                                        </div>
                                        <canvas id="cart" width="60rem" height="30rem" style="display: block; width: 600px; height: 320px;" class="chartjs-rendor-monitor"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('kerangka.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar dari akun Anda?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika ingin keluar dari akun.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="/logout" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include('kerangka.script')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    
   <script>
    $(document).ready(function() {
        // Fetch data from the Laravel backend
        $.ajax({
          url: '/home/chart-data',  // Route that returns data
          method: 'GET',
          success: function(response) {
            var months = response.months;
            var visitorCounts = response.visitor_counts;
    
            // Create the Chart.js chart
            var ctx = document.getElementById("cart").getContext("2d");
    
            var myLineChart = new Chart(ctx, {
              type: 'line',
              data: {
                labels: months,  // Dynamic months from database
                datasets: [{
                  label: "Kunjungan",
                  lineTension: 0.3,
                  backgroundColor: "rgba(78, 115, 223, 0.05)",
                  borderColor: "rgba(78, 115, 223, 1)",
                  pointRadius: 3,
                  pointBackgroundColor: "rgba(78, 115, 223, 1)",
                  pointBorderColor: "rgba(78, 115, 223, 1)",
                  pointHoverRadius: 3,
                  pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                  pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                  pointHitRadius: 10,
                  pointBorderWidth: 2,
                  data: visitorCounts,  // Dynamic visitor counts from database
                }],
              },
              options: {
                maintainAspectRatio: false,
                layout: {
                  padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                  }
                },
                scales: {
                  xAxes: [{
                    time: {
                      unit: 'date'
                    },
                    gridLines: {
                      display: false,
                      drawBorder: false
                    },
                    ticks: {
                      maxTicksLimit: 7
                    }
                  }],
                  yAxes: [{
                    ticks: {
                      maxTicksLimit: 5,
                      padding: 10,
                    },
                    gridLines: {
                      color: "rgb(234, 236, 244)",
                      zeroLineColor: "rgb(234, 236, 244)",
                      drawBorder: false,
                      borderDash: [2],
                      zeroLineBorderDash: [2]
                    }
                  }],
                },
                legend: {
                  display: false
                },
                tooltips: {
                  backgroundColor: "rgb(255,255,255)",
                  bodyFontColor: "#858796",
                  titleMarginBottom: 10,
                  titleFontColor: '#6e707e',
                  titleFontSize: 14,
                  borderColor: '#dddfeb',
                  borderWidth: 1,
                  xPadding: 15,
                  yPadding: 15,
                  displayColors: false,
                  intersect: false,
                  mode: 'index',
                  caretPadding: 10,
                  callbacks: {
                    label: function(tooltipItem, chart) {
                      var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                      return datasetLabel + ': ' + tooltipItem.yLabel;
                    }
                  }
                }
              }
            });
          }
        });
      });
    </script>
    <script>
      $('#example').DataTable();    
     </script>

</body>


</html>