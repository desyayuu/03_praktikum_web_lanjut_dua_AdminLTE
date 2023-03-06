@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title"><b>Profil AYU</b></h3>
            </div>
            <div class="card-body">
                Nama        : {!! $nama !!} <br>
                NIM         : {!! $nim !!} <br>
                Kelas       : {!! $kelas !!} <br>
                jurusan     : {!! $jurusan !!} <br>
                Asal Daerah : {!! $asal !!} <br>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title"><b>Profil DILLA</b></h3>
            </div>
            <div class="card-body">
                Nama        : {!! $nama1 !!} <br>
                NIM         : {!! $nim1 !!} <br>
                Kelas       : {!! $kelas1 !!} <br>
                Jurusan     : {!! $jurusan1 !!} <br>
                Asal Daerah : {!! $asal1 !!} <br>
            </div>
        </div>
    </div>
</section>
@endsection