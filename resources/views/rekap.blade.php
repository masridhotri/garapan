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
                <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
            </div>
            <?php
                //deklarasi
                $tgl_skrng = date('Y-m-d');

                //tampil tgl kemarin
                $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

                //mendapatkan 6 hari lalu
                $seminggu = date('Y-m-d h:i:s', strtotime('-1 week +1 day', strtotime($tgl_skrng)));

                //bulan
                $sebulan = date('Y-m-d h:i:s', strtotime('-1 month +1 day', strtotime($tgl_skrng)));

                $sekarang = date('Y-m-d h:i:s');

                //query tampil jmlh data pengunjung
                // $tgl_skrng = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count (*) FROM tamus where tanggal like '%$tgl_skrng%'"));

            ?>
            <table class="table table-bordered">
                <tr>
                    <td>Hari Ini</td>
                    <td>: <?= $tgl_skrng[0]?></td>
                </tr>
                <br>
                <tr>
                    <td>Minggu Ini</td>
                    <td>: <?= $seminggu[0]?></td>
                </tr>
                <br>
                <tr>
                    <td>Bulan Ini</td>
                    <td>: <?= $sebulan[0]?></td>
                </tr>
                <br>
                <tr>
                    <td>Keseluruhan</td>
                    <td>: 0</td>
                </tr>
            </table>
        </div>
    </div>
    
</div>
<!-- end col-lg-5 -->


{{-- @include('kerangka.statistik') --}}

@include('kerangka.footer')

@include('kerangka.script')
</body>
</html>