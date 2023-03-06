@extends('layouts.template')
@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Profil</h3>
            </div>
            <div class="card-body">
                Nama: {!! $nama !!} <br>
                NIM: {!! $nim !!} <br>
                Kelas: {!! $kelas !!} <br>
                Jurusan: {!! $jurusan !!} <br>
                Asal Daerah: {!! $asal !!} <br>

            </div>
        </div>
    </div>
</section>
@endsection