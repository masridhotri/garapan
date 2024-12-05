<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Kunjungan Tamu | RSUD dr. DARSONO</title>
    <link rel="icon" href="tamplate/assets/img/Logo-RSUD.png" type="image/x-icon">

    @include('kerangka.style')

</head>
<body id="page-top">
    @include('sidebar.sp')
    @include('kerangka.nav')

    <!-- card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Data Kunjungan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengunjung</th>
                            <th>Asal Instansi</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Keperluan Berkunjung</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kuntum</td>
                            <td>apa aja deh</td>
                            <td>Pacitan pride</td>
                            <td>8723425</td>
                            <td>gabut</td>
                            <td>2024/12/05</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

    @include('kerangka.footer')

    @include('kerangka.script')    
</body>
</html>