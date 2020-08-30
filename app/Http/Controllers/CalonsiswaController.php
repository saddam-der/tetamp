<?php

namespace App\Http\Controllers;

use App\Calonsiswa;
use Illuminate\Http\Request;


class CalonsiswaController extends Controller
{
    public function index()
    {
        return "Tabel Data Calon Siswa";
    }
    public function create()
    {
        return view('form-pendaftaran');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'noppdb'             => 'required',
            'nama'               => 'required',
            'asal_sekolah'       => 'required',
            'pilihan1'           => 'required',
            'pilihan2'           => 'required',
            'alamat'             => 'required',
            'nohp'               => 'required'
        ]);
        dump($validateData);
        $calonsiswa = new Calonsiswa();
        $calonsiswa->noppdb = $validateData['noppdb'];
        $calonsiswa->nama = $validateData['nama'];
        $calonsiswa->asal_sekolah = $validateData['asal_sekolah'];
        $calonsiswa->pilihan1 = $validateData['pilihan1'];
        $calonsiswa->pilihan2 = $validateData['pilihan2'];
        $calonsiswa->alamat = $validateData['alamat'];
        $calonsiswa->nohp = $validateData['nohp'];
        $calonsiswa->save();

        return "Data Berhasil masuk ke database";
    }
}
