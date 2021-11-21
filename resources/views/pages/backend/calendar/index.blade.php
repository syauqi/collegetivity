@extends('layouts.backend.master')

@section('title', 'Kalender — Collegetivity')
@section('content')

<section>
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">📅 • Kalender</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini ada kalender yang dapat kalian lihat. <span class="d-none d-md-inline">
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 calendar-sec box-col-6">
                <div class="card gradient-primary o-hidden">
                    <div class="card-body">
                        <div class="setting-dot">
                            <div class="setting-bg-primary date-picker-setting position-set pull-right"><i
                                    class="fa fa-spin fa-cog"></i></div>
                        </div>
                        <div class="default-datepicker">
                            <div class="datepicker-here" data-language="en"></div>
                        </div><span class="default-dots-stay overview-dots full-width-dots"><span
                                class="dots-group"><span class="dots dots1"></span><span
                                    class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span
                                    class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span
                                    class="dots dots6 dot-small"></span><span
                                    class="dots dots7 dot-small-semi"></span><span
                                    class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">
                                </span></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    <!-- Container-fluid Ends-->

    <br>
    <br>

</section>
@endsection