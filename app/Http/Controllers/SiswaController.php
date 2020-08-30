<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa.index');
    }

    public function proses_simpan(Request $request)
    {

        $validateData = $request->validate(
            [
                'nis'                => 'required',
                'nama_siswa'         => 'required',
                'tempat_lahir'       => 'required',
                'tgl_lahir'          => 'required',
                'jurusan'            => 'required',
                'nohp'               => 'required'
            ],
            [
                'nis.required' => 'NIS Wajib di isi',
                'nama_siswa.required' => 'Nama Siswa Wajib di isi ',
                'tempat_lahir.required' => 'Tempat Lahir Wajib di isi ',
                'tgl_lahir.required' => 'Tanggal Lahir Wajib di isi ',
                'jurusan.required' => 'Jurusan Wajib di pilih ',
                'nohp.required' => 'Nomer HP Wajib di isi ',

            ]
        );
        dump($validateData);


        // dump($request);
        echo $request->nis;
        echo "<br>";
        echo $request->nama_siswa;
        echo "<br>";
        echo $request->alamat;
        echo "<br>";
        echo $request->tempat_lahir;
        echo "<br>";
        echo $request->tgl_lahir;
        echo "<br>";
        echo $request->jurusan;
        echo "<br>";
        echo $request->nohp;
        echo "<br>";
    }
}
