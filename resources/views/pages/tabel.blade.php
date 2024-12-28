<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Statistik Kunjungan Tamu | RSUD dr DARSONO PACITAN</title>
    <link rel="icon" href="tamplate/assets/img/Logo-RSUD.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">

    @include('kerangka.style')
</head>

<body id="page-top">
@include('sidebar.ss')
@include('kerangka.nav')
<!-- col-lg-5 -->
<div class="col-10 mb-0 align-items-center justify-content-center">
    <!-- card -->
    <div class="card shadow">
        <!-- card-body -->
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Data Jumlah Pengunjung</h1>
            </div>
          
            <table class="table table-bordered">
                <tr>
                    <td>Hari Ini</td>
                    <td>: {{$hari }}  </td>
                </tr>
                <br>
                <tr>
                    <td>Minggu Ini</td>
                    <td>: {{$minggu}} </td>
                </tr>
                <br>
                <tr>
                    <td>Bulan Ini</td>
                    <td>: {{$bulan}} </td>
                </tr>
                <br>
                <tr>
                  
                    <td>Keseluruhan</td>
                    <td><p> : {{$tamu}} data </p></td>
                </tr>
            </table>
        </div>
    </div>
    
</div>


<!-- end col-lg-5 -->


{{-- @include('kerangka.statistik') --}}

@include('kerangka.footer')

@include('kerangka.script')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
     <script>
      $('#example').DataTable();    
     </script>
</body>
</html>