@extends('layouts.master')
@section('title', 'Data Siswa Baru')
@section('pagetitle')
<img alt="image" src="{{ asset('../dahsboard/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px"> 
  <h1>Data Pendaftaran Siswa Baru</h1>
@endsection
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <span>{{ session('success')}}</span>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <div id="alert"></div>

    <div class="card shadow">
		<div class="card-header py-2 d-flex justify-content-between align-items-center">
			<h2 class="h6 m-0 font-weight-bold text-primary">Data Pendaftaran Siswa Baru</h2>
            <div class="row">
                <a href="{{ route('latihan.create') }}" class="btn px-2 btn-sm btn-primary shadow">Tambah Siswa</a>
               
            </div>
			
		</div>
		<div class="card-body">
			<div class="table-responsive">
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
							<th>Aksi</th>
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
                                <td>
                                    <a href="{{route('latihan.edit', $latihan->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('latihan.cetak', $latihan->id)}}" class="btn px-2 btn-sm btn-primary shadow">Print</a>
                                    <form action="{{route('latihan.destroy', $latihan->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
				</table>
			</div>
		</div>
	</div>
@endsection