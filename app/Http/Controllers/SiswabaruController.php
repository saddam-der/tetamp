<?php

namespace App\Http\Controllers;

use App\Calonsiswa;
use Illuminate\Http\Request;

class SiswabaruController extends Controller
{
    public function index()
    {
        $csb = Calonsiswa::all();
        return view('indexcalonsiswa', ['calonsiswa' => $csb]);
    }
}
