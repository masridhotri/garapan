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
        <h2 class="text-white">SISTEM INFORMASI BUKU TAMU <br> RSUD dr. DARSONO PACITAN</h2>
    </div>
    <!-- end Head -->

    <!-- awal row -->
    <div class="row mt-2">
        <!-- col-lg-7 -->
        <div class="col-7 mb-3">
            <div class="card shadow bg-gradient-light">
                <!-- card-body -->
                <div class="card-body">
                <!-- <div class="p-5"> -->
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Identitas Pengunjung</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Pengunjung"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="instansi" placeholder="Asal Instansi"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="kontak" placeholder="No. HP"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tujuan" placeholder="Keperluan Berkunjung"></input>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" name="tanggal" placeholder="Tanggal Kunjungan"></input>
                                </div>

                                
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Simpan
                                </a>
                                <button class="btn btn-primary btn-user btn-block">Cek Riwayat Kunjungan</button>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">By MAGANG SIMRS Kuntum Khairunnesa | 2024 - <?=date('Y')?></a>
                            </div>
                            
                        <!-- </div> -->
                </div>
                <!-- end card-body -->
            </div>
        </div>
        <!-- end col-lg-7 -->

        <!-- col-lg-5 -->
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
        <!-- end col-lg-5 -->
    </div>
    <!-- end row -->

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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                        </tr>
                    </thead>
                    {{--<tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                        </tr>
                    </tfoot>--}}
                    <tbody>
                        <tr>
                            <td>Adea</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                        </tr>
                        <tr>
                            <td>Agil</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                        </tr>
                        <tr>
                            <td>Helmi</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('kerangka.script')

</body>

</html>