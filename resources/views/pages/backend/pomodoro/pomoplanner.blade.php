@extends('layouts.backend.master')

@section('title', 'File Tugas & Pelajaran — Collegetivity')
@section('content')

<section>
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">⬜ • Whiteboard</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini ada whiteboard yang bisa kalian pakai juga berkolaborasi. <span
                            class="d-none d-md-inline">
                            Jika kalian ingin berkolaborasi dengan teman kalian, cukup klik share dan bagikan link nya
                            ke temanmu. Maka dengan begitu kalian dapat segera berkolaborasi!
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <iframe class="rounded-lg" src="https://pomoplanner.app/"
                    style="width: 100%; height: 500px; overflow: hidden; border: none;box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;"></iframe>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <br>
    <br>
</section>
@endsection