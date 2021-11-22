@extends('layouts.backend.master')

@section('title', 'Lifeat — Collegetivity')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">⏰🌏 • Lifeat</h5>
            </div>
            <div class="card-body">
                <p>
                    LifeAt sedang membangun dunia baru ruang virtual dan alat produktivitas GRATIS!!
                    <span class="d-none d-md-inline">
                        Kami berharap alat kami dapat membantu orang-orang merasa tidak berdaya selama pandemi ini.
                        —— <a href="https://lifeat.io/">Website Source ⇾</a>
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
            <iframe class="rounded-lg" src="https://lifeat.io/" style="width: 100%; height: 600px; overflow: hidden; 
                border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
            </iframe>
        </div>
    </div>
</div>

@endsection