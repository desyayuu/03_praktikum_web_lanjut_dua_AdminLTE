<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index(){
        return view('profile')
        ->with('nama', 'Desy Ayurianti')
        ->with('nim', '2141720119')
        ->with('kelas', 'TI-2G')
        ->with('jurusan', 'D4 Teknik Informatika')
        ->with('asal', 'Sumenep')
<<<<<<< HEAD
        
        ->with('nama1', 'Maria Fadilla')
        ->with('nim1', '2141720063')
        ->with('kelas1', 'TI-2G')
        ->with('jurusan1', 'D4 Teknik Informatika')
        ->with('asal1', 'Kediri');
=======


        ->with('nama2', 'Maria Fadilla')
        ->with('nim2', '2141720063')
        ->with('kelas2', 'TI-2G')
        ->with('jurusan2', 'D4 Teknik Informatika')
        ->with('asal2', 'Kediri');
>>>>>>> 0626d51c77810f343a9ed5ed9f3a785c0797dbd7
    }
}
