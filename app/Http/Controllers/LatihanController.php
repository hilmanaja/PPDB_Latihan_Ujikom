<?php

namespace App\Http\Controllers;

use App\Latihan;
use Illuminate\Http\Request;

use PDF;

class LatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latihan = Latihan::all();
        return view('latihan.index', compact('latihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('latihan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis'=>'required|unique:latihan',
            'nama'=>'required',
            'jk'=>'required',
            'tempat'=>'required',
            'tl'=>'required',
            'alamat'=>'required',
            'asal_sekolah'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
            
        ]);

        Latihan::create($request->all());
        return redirect()->route('landing')->with('success', 'Data Siswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Latihan  $latihan
     * @return \Illuminate\Http\Response
     */
    public function show(Latihan $latihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Latihan  $latihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Latihan $latihan)
    {
        return view('latihan.edit',compact('latihan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Latihan  $latihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Latihan $latihan)
    {
            $request->validate([
                'nis'=>'required',
                'nama'=>'required',
                'jk'=>'required',
                'tempat'=>'required',
                'tl'=>'required',
                'alamat'=>'required',
                'asal_sekolah'=>'required',
                'kelas'=>'required',
                'jurusan'=>'required',
                
        ]);

        $latihan->update($request->all());
        return redirect()->route('latihan.index')->with('success', 'Data Siswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Latihan  $latihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Latihan $latihan)
    {
        $latihan->delete();

        return redirect()->route('latihan.index')->with('success', 'Data Siswa Berhasil Dihapus');
    }

    public function cetak($id)
    {
        $latihan = Latihan::find($id);

        $cetak = PDF::loadview('latihan.cetak', compact('latihan'));
        return $cetak->stream();
    }


}
