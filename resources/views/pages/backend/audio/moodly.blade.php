@extends('layouts.backend.master')

@section('title', 'Moodly — Collegetivity')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">🔊 • Moodly</h5>
            </div>
            <div class="card-body">
                <p>
                    Dapatkan rasa fokus dan relaksasi yang lebih baik dengan mendengarkan suara alam sekitar.
                    <span class="d-none d-md-inline">
                        Gandakan produktivitas dan fokus Anda dengan Moodly, sepenuhnya GRATIS.
                        —— <a href="https://moodly.site/">Website Source ⇾</a>
                    </span>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <iframe class="rounded-lg" src="https://moodly.site/" style="width: 100%; height: 600px; overflow: hidden;
                 border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
                </iframe>
            </div>
        </div>
    </div>
</div>

@endsection