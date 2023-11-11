@extends('layouts.app')

@section('title', 'Absensi Matakuliah')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Absensi Matakuliah</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Absensi Matakuliah</a></div>
                    <div class="breadcrumb-item">Show QrCode</div>
                </div>
            </div>

            <div class="section-body">
     
                <div class="visible-print text-center">
                    {!! QrCode::size(200)->generate($code); !!}
                    <p>Scan me to Absensi Class</p>
                </div>
                
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
