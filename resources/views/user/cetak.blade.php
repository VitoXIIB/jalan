<html>
    <head>
        <title>Cetak PDF</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <style type="text/css">
        table tr td,
        table tr th{
            font-size:9pt;
        }
        </style>
        <center>
            <h5>Cetak PDF</h5>
        </center>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach ( $cetak as $p )
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->telp }}</td>
                    <td>{{ $p->username }}</td>
                    <td>{{ $p->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </body>
</html>