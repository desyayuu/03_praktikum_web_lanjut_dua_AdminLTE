<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //profil (desy, maria)
    public function index(){
        return view('profile')
        ->with('nama', 'Desy Ayurianti')
        ->with('nim', '2141720119')
        ->with('kelas', 'TI-2G')
        ->with('jurusan', 'D4 Teknik Informatika')
        ->with('asal', 'Sumenep')


        ->with('nama2', 'Maria Fadilla')
        ->with('nim2', '2141720063')
        ->with('kelas2', 'TI-2G')
        ->with('jurusan2', 'D4 Teknik Informatika')
        ->with('asal2', 'Kediri');
    }
}
