<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Kunjungan Tamu | RSUD dr. DARSONO</title>
    <link rel="icon" href="tamplate/assets/img/Logo-RSUD.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">


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
            {{-- <div class="table-responsive "style="height: 400px; width: 100%; "> --}}
                <table id="example" class="table table-striped" style="width:100%;">
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
                       
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->instansi }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>0{{ $row->nope }}</td>
                            <td>{{ $row->keperluan }}</td>
                            <td>{{ $row->tanggal }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            {{-- </div> --}}
        </div>
    </div> 

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