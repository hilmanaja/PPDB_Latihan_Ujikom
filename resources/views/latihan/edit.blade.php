@extends('layouts.master')
@section('title', 'Data User')
@section('pagetitle')
<img alt="image" src="{{ asset('../dahsboard/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px"> 
  <h1>Edit Data</h1>
@endsection
@section('content');
<div class="section-body">
    <div class="row">
        <div class="col-lg-6 mx-auto">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('latihan.update', [$latihan->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-header py-3">
                        <h2 class="h6 m-0 font-weight-bold text-primary">Edit Data Siswa Baru</h2>
                    </div>
                    
                  <div class="card-body">
                        <div class="form-group">
                          <label @error('nis') class="text-danger" 
                            @enderror>Nis @error('nis')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="nis" type="number" name="nis" class="form-control" value="{{ $latihan->nis }}">
                        </div>
                   
                    <div class="form-group">
                        <label @error('nama') class="text-danger" 
                        @enderror>Nama @error('nama')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama" type="text" name="nama" class="form-control" value="{{ $latihan->nama }}">
                    </div>
                

                      <div class="form-group">
                        <label @error('jk') class="text-danger" 
                            @enderror>Jenis Kelamin @error('jk')
                                 {{ $message }}
                            @enderror
                        </label>
                        <select class="form-control" name="jk" id="jk">
                            <option value disable>Pilih Opsi</option>
                                <option value="Pria"@if($latihan ->jk == 'Pria') selected @endif)>Pria</option>
                                <option value="Wanita"@if($latihan ->jk == 'Wanita') selected @endif>Wanita</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label @error('tempat') class="text-danger" 
                            @enderror>Tempat Lahir @error('tempat')
                             {{ $message }}
                            @enderror
                        </label>
                        <input id="tempat" type="text" name="tempat" class="form-control" value="{{ $latihan->tempat  }}">
                      </div>

                        <div class="form-group">
                          <label @error('tl') class="text-danger" 
                          @enderror>Tanggal & Tahun Lahir @error('tl')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="tl" type="date" name="tl" value="{{ $latihan->tl }}" class="form-control">
                        </div>
                      

                      <div class="form-group">
                        <label @error('alamat') class="text-danger" 
                            @enderror>Alamat @error('alamat')
                             {{ $message }}
                            @enderror
                        </label>
                        <textarea id="alamat" name="alamat" class="form-control">{{ $latihan->alamat }}</textarea>
                      </div>

                      <div class="form-group">
                        <label @error('asal_sekolah') class="text-danger" 
                            @enderror>Asal Sekolah @error('asala_sekolah')
                             {{ $message }}
                            @enderror
                        </label>
                        <input id="asal_sekolah" type="text" name="asal_sekolah" class="form-control" value="{{ $latihan->asal_sekolah }}">
                      </div>

                      <div class="form-group">
                        <label @error('kelas') class="text-danger" 
                            @enderror>Kelas @error('kelas')
                                 {{ $message }}
                            @enderror
                        </label>
                        <select class="form-control" name="kelas" id="kelas">
                            <option value disable>Pilih Opsi</option>
                                <option value="X"@if($latihan ->kelas == 'X') selected @endif>X</option>
                                <option value="XI"@if($latihan ->kelas == 'XI') selected @endif>XI</option>
                                <option value="XII"@if($latihan ->kelas == 'XII') selected @endif>XII</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label @error('jurusan') class="text-danger" 
                            @enderror>Jurusan @error('jurusan')
                                 {{ $message }}
                            @enderror
                        </label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value disable>Pilih Opsi</option>
                                <option value="OTKP"@if($latihan ->jurusan == 'OTKP') selected @endif>OTKP</option>
                                <option value="RPL"@if($latihan ->jurusan == 'RPL') selected @endif>RPL</option>
                                <option value="TKJ"@if($latihan ->jurusan == 'TKJ') selected @endif>TKJ</option>
                                <option value="MMD" @if($latihan ->jurusan == 'MMD') selected @endif>MMD</option>
                                <option value="BDP" @if($latihan ->jurusan == 'BDP') selected @endif>BDP</option>
                                <option value="HOTEL"@if($latihan ->jurusan == 'HOTEL') selected @endif>PERHOTELAN</option>
                                <option value="TBG" @if($latihan ->jurusan == 'TBG') selected @endif>TBG</option>
                        </select>
                      </div>


                    </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('latihan.index') }}" class="btn btn-secondary shadow">Cancle</a>
                  </div>
                 </form>
            </div>
        </div>
    </div>
</div>

@endsection