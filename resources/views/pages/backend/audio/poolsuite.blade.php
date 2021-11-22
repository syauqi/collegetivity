@extends('layouts.backend.master')

@section('title', 'Poolsuite — Collegetivity')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">🔊 • Poolsuite</h5>
            </div>
            <div class="card-body">
                <p>
                    Mewah namun santai. Sepele namun canggih. Suara manis musim panas yang sama— mencapai 11.
                    <span class="d-none d-md-inline">
                        Kemasi tas virtual Anda saat Anda telah ditingkatkan dari duduk di tepi kolam renang menjadi
                        cabana pribadidi The Poolsuite.
                        —— <a href="https://poolsuite.net/">Website Source ⇾</a>
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
            <iframe class="rounded-lg" src="https://poolsuite.net/" style="width: 100%; height: 600px; overflow: hidden; 
                border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
            </iframe>
        </div>
    </div>
</div>

@endsection