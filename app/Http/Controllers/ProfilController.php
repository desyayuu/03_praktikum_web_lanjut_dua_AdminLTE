<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //profil ayu-dilla
    public function index(){
        return view('profile')
        ->with('nama', 'Desy Ayurianti')
        ->with('nim', '2141720119')
        ->with('kelas', 'TI-2G')
        ->with('jurusan', 'D4 Teknik Informatika')
        ->with('asal', 'Sumenep')
        
        ->with('nama1', 'Maria Fadilla')
        ->with('nim1', '2141720063')
        ->with('kelas1', 'TI-2G')
        ->with('jurusan1', 'D4 Teknik Informatika')
        ->with('asal1', 'Kediri');
    }
}
