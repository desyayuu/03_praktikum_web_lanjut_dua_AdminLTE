@extends('layouts.template')

@section('content')
    <section class="content">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Welcome to this Website</h3>
                    </div>
                </div>
            </div>
    </section>
@endsection
@push('js')
    <script>
        alert('Selamat Datang');
    </script>
@endpush