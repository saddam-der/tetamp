<?php

namespace App\Http\Controllers;

use App\Calonsiswa;
use Illuminate\Http\Request;


class CalonsiswaController extends Controller
{
    public function index()
    {
        $csb = Calonsiswa::all();
        return view('indexcalonsiswa', ['calonsiswa' => $csb]);
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

        $request->session()->flash('pesan', "Penambahan data baru berhasil ,Data {$validateData['nama']} ");
        return redirect()->route('calonsiswa.index');
    }

    public function prosesEdit(Request $request, Calonsiswa $calonsiswa)
    {
        $validateData = $request->validate([
            'noppdb' => 'required',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'alamat' => 'required',
            'nohp' => ''
        ]);
        // dump($validateData);
        Calonsiswa::where('id', $calonsiswa->id)->update($validateData);
        return redirect()->route('calonsiswa.index')->with('pesan', "Data Berhasil di Ubah {$validateData['nama']}");
    }

    public function viewform(Calonsiswa $calonsiswa)
    {
        // dd($calonsiswa);
        return view('test', ['calonsiswa' => $calonsiswa]);
    }

    public function show($calonsiswa)
    {
        // dd($calonsiswa);
        $result = Calonsiswa::find($calonsiswa);
        return view('detail_calon', ['calonsiswa' => $result]);
    }

    public function delete(Calonsiswa $calonsiswa)
    {
        $calonsiswa->delete();
        return redirect()->route('calonsiswa.index')->with('pesanhapus', "Hapus data $calonsiswa->nama berhasil");
    }
}
