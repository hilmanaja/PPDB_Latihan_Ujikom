<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <center>
        <h3 class="h3">Formulir Siswa Baru</h3>
    </center>

    <br>
    <table cellspacing="0" cellpadding="4">
        <tr>
            <th width="1%">NIS</th>
            <td align="right">:</td>
            <td>{{ $latihan->nis }}</td>
        </tr>
        <tr>
            <th width="1%">Nama</th>
            <td align="right">:</td>
            <td>{{ $latihan->nama }}</td>
        </tr>
        <tr>
            <th width="1%">Jenis Kelamin</th>
            <td align="right">:</td>
            <td>{{ $latihan->jk=='L'?'Laki-laki':'Perempuan' }}</td>
        </tr>
        <tr>
            <th width="1%">Tempat Lahir</th>
            <td align="right">:</td>
            <td>{{ $latihan->tempat }}</td>
        </tr>
        <tr>
            <th width="1%">Tgl Lahir</th>
            <td align="right">:</td>
            <td>{{ date('d-m-Y', strtotime($latihan->tl)) }}</td>
        </tr>
        <tr>
            <th width="1%">Alamat</th>
            <td align="right">:</td>
            <td>{{ $latihan->alamat }}</td>
        </tr>
        <tr>
            <th width="1%">Asal Sekolah</th>
            <td align="right">:</td>
            <td>{{ $latihan->asal_sekolah }}</td>
        </tr>
        <tr>
            <th width="1%">Kelas</th>
            <td align="right">:</td>
            <td>{{ $latihan->kelas }}</td>
        </tr>
        <tr>
            <th width="1%">Jurusan</th>
            <td align="right">:</td>
            <td>{{ $latihan->jurusan }}</td>
        </tr>
    </table>
    <br>
    <br>
        <h6 align="right">Bertanda Tangan</h6>
        <br>
        <br>
        <br>
        <br>
        <h6 align="right">Bogor,8 April 2021</h6>
</body>
</html>