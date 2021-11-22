@extends('layouts.backend.master')

@section('title', 'Pomofocus — Collegetivity')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">⏰ • Pomofocus</h5>
            </div>
            <div class="card-body">
                <p>
                    Pomofocus adalah pengatur waktu pomodoro yang dapat disesuaikan yang berfungsi di desktop & browser
                    seluler.
                    <span class="d-none d-md-inline">
                        Tujuan dari aplikasi ini adalah untuk membantu Anda fokus pada tugas apa pun yang sedang Anda
                        kerjakan, seperti belajar, menulis, atau coding.
                        —— <a href="https://pomofocus.io/">Website Source ⇾</a>
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
            <iframe class="rounded-lg" src="https://pomofocus.io/" style="width: 100%; height: 600px; overflow: hidden; 
                border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
            </iframe>
        </div>
    </div>
</div>

@endsection