@extends('layouts.backend.master')

@section('title', 'Skyoffice — Collegetivity')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">🏢 • Skyoffice</h5>
            </div>
            <div class="card-body">
                <p>
                    Presentasi dan bertemu temanmu dengan konsep game dimana saja dan kapan saja dengan SkyOffice
                    <span class="d-none d-md-inline">
                        Banyak hal yang bisa kamu lakukan disini, screenshare, meeting, rapat dan banyak hal lain yang
                        menanti mu.
                        —— <a href="https://skyoffice.netlify.app/">Website Source ⇾</a>
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
            <iframe class="rounded-lg" src="https://skyoffice.netlify.app/" style="width: 100%; height: 800px; overflow: hidden; 
                border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
            </iframe>
        </div>
    </div>
</div>

@endsection