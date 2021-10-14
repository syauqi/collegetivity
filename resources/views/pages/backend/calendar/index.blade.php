@extends('layouts.backend.master')

@section('title', 'Dashboard — Ciradyka Pramuka SMAN 1 Ciamis')
@section('content')

@push('calendar-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/calendar.css')}}">
@endpush

<section>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card box-shadow-title">
                <div class="card-header">
                    <h5>Basic </h5>
                </div>
                <div class="d-flex">
                    <div id="lnb">
                        <div class="lnb-new-schedule text-center">
                            <button class="btn btn-primary" id="btn-new-schedule" type="button" data-toggle="modal">New
                                schedule</button>
                        </div>
                        <div class="lnb-calendars" id="lnb-calendars">
                            <div>
                                <div class="lnb-calendars-item">
                                    <label>
                                        <input class="tui-full-calendar-checkbox-square" type="checkbox" value="all"
                                            checked=""><span></span><strong>View all</strong>
                                    </label>
                                </div>
                            </div>
                            <div class="lnb-calendars-d1" id="calendarList"></div>
                        </div>
                    </div>
                    <div id="right">
                        <div id="menu">
                            <div class="dropdown d-inline">
                                <button class="btn btn-default btn-sm dropdown-toggle" id="dropdownMenu-calendarType"
                                    type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i
                                        class="calendar-icon ic_view_month" id="calendarTypeIcon"
                                        style="margin-right: 4px;"></i><span id="calendarTypeName">Dropdown</span><i
                                        class="calendar-icon tui-full-calendar-dropdown-arrow"></i></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                                    <li role="presentation"><a class="dropdown-menu-title" role="menuitem"
                                            data-action="toggle-daily"><i
                                                class="calendar-icon ic_view_day"></i>Daily</a></li>
                                    <li role="presentation"><a class="dropdown-menu-title" role="menuitem"
                                            data-action="toggle-weekly"><i
                                                class="calendar-icon ic_view_week"></i>Weekly</a></li>
                                    <li role="presentation"><a class="dropdown-menu-title" role="menuitem"
                                            data-action="toggle-monthly"><i
                                                class="calendar-icon ic_view_month"></i>Month</a></li>
                                    <li role="presentation"><a class="dropdown-menu-title" role="menuitem"
                                            data-action="toggle-weeks2"><i class="calendar-icon ic_view_week"></i>2
                                            weeks</a></li>
                                    <li role="presentation"><a class="dropdown-menu-title" role="menuitem"
                                            data-action="toggle-weeks3"><i class="calendar-icon ic_view_week"></i>3
                                            weeks</a></li>
                                    <li class="dropdown-divider" role="presentation"></li>
                                    <li role="presentation"><a role="menuitem" data-action="toggle-workweek"></a>
                                        <input class="tui-full-calendar-checkbox-square" type="checkbox"
                                            value="toggle-workweek" checked=""><span class="checkbox-title"></span>Show
                                        weekends
                                    </li>
                                    <li role="presentation"><a role="menuitem" data-action="toggle-start-day-1"></a>
                                        <input class="tui-full-calendar-checkbox-square" type="checkbox"
                                            value="toggle-start-day-1"><span class="checkbox-title"></span>Start Week on
                                        Monday
                                    </li>
                                    <li role="presentation"><a role="menuitem" data-action="toggle-narrow-weekend"></a>
                                        <input class="tui-full-calendar-checkbox-square" type="checkbox"
                                            value="toggle-narrow-weekend"><span class="checkbox-title"></span>Narrower
                                        than weekdays
                                    </li>
                                </ul>
                            </div><span id="menu-navi">
                                <button class="btn btn-default btn-sm move-today" type="button"
                                    data-action="move-today">Today</button>
                                <button class="btn btn-default btn-sm move-day" type="button" data-action="move-prev"><i
                                        class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i></button>
                                <button class="btn btn-default btn-sm move-day" type="button" data-action="move-next"><i
                                        class="calendar-icon ic-arrow-line-right"
                                        data-action="move-next"></i></button></span><span class="render-range"
                                id="renderRange"></span>
                        </div>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@push('calendar-scripts')
<script src="{{url('cuba/assets/js/calendar/tui-code-snippet.min.js')}}"></script>
<script src="{{url('cuba/assets/js/calendar/tui-time-picker.min.js')}}"></script>
<script src="{{url('cuba/assets/js/calendar/tui-date-picker.min.js')}}"></script>
<script src="{{url('cuba/assets/js/calendar/moment.min.js')}}"></script>
<script src="{{url('cuba/assets/js/calendar/chance.min.js')}}"></script>
<script src="{{url('cuba/assets/js/calendar/tui-calendar.js')}}"></script>
<script src="{{url('cuba/assets/js/calendar/calendars.js')}}"></script>
<script src="{{url('cuba/assets/js/calendar/schedules.js')}}"></script>
<script src="{{url('cuba/assets/js/calendar/app.js')}}"></script>
@endpush

@endsection