@extends('layouts.template')

@section('content')
    <section class="content">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h2 class="card-title">Welcome to this Website</h2>
                    </div>
                </div>
            </div>
    </section>

    <section class="content">
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h1 class="card-title"><b>HI GENKS!</b></h1>
            </div>
            <div class="card-body">
                Ceritakan kelu kesahmu selama masa kuliah, GRATIS!<br>
                <i>~ Website ini dibuat untuk memenuhi tugas praktikum 02 Pertemuan 3 pada mata kuliah Praktikum web Lanjut ~</i>
            </div>
        </div>
    </div>
    </section>
@endsection
@push('js')
    <script>
        alert('Selamat Datang di Website Curcol, Enjoy!');
    </script>
@endpush