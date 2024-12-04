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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                        </tr>
                    </thead>
                    <!--<tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                        </tr>
                    </tfoot>-->
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

    @include('kerangka.footer')

    @include('kerangka.script')    
</body>
</html>