<!DOCTYPE html>
<html lang="id">

@include('includes.backend.head')

<body onload="startTime()">
    <!-- tap on top start-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap end-->
    <!-- page-wrapper start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- page header start-->
        @include('includes.backend.navbar')
        <!-- page header ends                              -->
        <!-- page body start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- page sidebar start-->
            @include('includes.backend.sidebar')
            <!-- page sidebar end-->
            <div class="page-body">
                <!-- container-fluid start-->
                @yield('content')
                <!-- container-fluid end-->
            </div>
            <!-- footer start-->
            @include('includes.backend.footer')
            <!-- footer end-->
        </div>
    </div>
    @include('includes.backend.script')
</body>

</html>