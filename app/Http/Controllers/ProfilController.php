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
        ->with('asal', 'Sumenep');

        return view('profile')
        ->with('nama', 'Maria Fadilla')
        ->with('nim', '2141720063')
        ->with('kelas', 'TI-2G')
        ->with('jurusan', 'D4 Teknik Informatika')
        ->with('asal', 'Kediri');
    }
}
