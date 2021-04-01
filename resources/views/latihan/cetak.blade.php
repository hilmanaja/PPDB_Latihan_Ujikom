<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak PDF</title>
</head>
<body>
    <center>
        <h3>Laporan Data Pendaftaran Siswa Baru</h3>
    </center>

    <table class="table table-striped table-bordered" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>Asal Sekolah</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $latihan as $latihan )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$latihan->nis}}</td>
                    <td>{{$latihan->nama}}</td>
                    <td>{{$latihan->jk}}</td>
                    <td>{{$latihan->tempat}}</td>
                    <td>{{$latihan->tl}}</td>
                    <td>{{$latihan->alamat}}</td>
                    <td>{{$latihan->asal_sekolah}}</td>
                    <td>{{$latihan->kelas}}</td>
                    <td>{{$latihan->jurusan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>