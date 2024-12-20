<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buku Kunjungan Tamu | RSUD dr. DARSONO PACITAN</title>
    <link rel="icon" href="tamplate/assets/img/Logo-RSUD.png" type="image/x-icon">


    @include('kerangka.style')

</head>

<body class="bg-gradient-info">

    <div class="container">
    <!-- Head -->
    <div class="head text-center">
        <img src="/tamplate/assets/img/Logo-RSUD.png" width="150">
        <h2 class="text-white"><b>SISTEM INFORMASI BUKU TAMU  RSUD dr. DARSONO PACITAN<b></h2>
    </div>
    <!-- end Head -->

    <!-- awal row -->
    <div class="row mt-2 align-items-center justify-content-center">
        <!-- col-lg-7 -->
        <div class="col-9 mb-2">
            <div class="card shadow bg-gradient-light">
                <!-- card-body -->
                <div class="card-body">
                        <!-- <div class="p-5"> -->
                     {{-- <form class="card-body" action="/simpan" method="POST" enctype="multipart/form-data"> --}}
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Identitas Pengunjung</h1>
                            </div>
                            <form class="user" class="card-body" action="/insertdata" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama Pengunjung"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="instansi" class="form-control form-control-user" placeholder="Asal Instansi"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control form-control-user" placeholder="Alamat"></input>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="nope" class="form-control form-control-user" placeholder="No. HP"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="keperluan" class="form-control form-control-user" placeholder="Keperluan Berkunjung"></input>
                                </div>
                                <div class="form-group">
                                    <input type="date" name="tanggal" class="form-control form-control-user" placeholder="Tanggal Kunjungan"></input>
                                </div>

                                
                                <button type="submit" class="btn btn-primary btn-user btn-block"> {{--onclick="openPopup()" --}}
                                    Simpan
                                </button>                                
                            </form>
                            <div class="text-center">
                                <a class="small" href="#">By MAGANG SIMRS Kuntum Khairunnesa | 2024 - <?=date('Y')?></a>
                            </div>
                    
                    </div>        <!-- </div> -->
                    {{-- </form>     --}}
                </div>
                <!-- end card-body -->
            </div>
        </div>
        <!-- end col-lg-7 -->

        {{-- <!-- col-lg-5 -->
        <div class="col-5 mb-3">
            <!-- card -->
            <div class="card shadow">
                <!-- card-body -->
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td>Hari Ini</td>
                            <td>: 0</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Minggu Ini</td>
                            <td>: 0</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Bulan Ini</td>
                            <td>: 0</td>
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
        <!-- end col-lg-5 --> --}}
    </div>
    <!-- end row -->


    @include('kerangka.script')

</body>

</html>