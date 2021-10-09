if (localStorage.getItem("color"))
    $("#color").attr("href", "../assets/css/" + localStorage.getItem("color") + ".css");
if (localStorage.getItem("dark"))
    $("body").attr("class", "dark-only");
$('<div class="customizer-links"><div class="nav flex-column nac-pills" id="c-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link " id="c-pills-home-tab" data-toggle="pill" href="#c-pills-home" role="tab" aria-controls="c-pills-home" aria-selected="true" data-original-title="" title=""><div class="settings"> <i class="icon-settings"></i></div> <span>Quick option</span> </a> <a class="nav-link" target="_blank" href="https://pixelstrap.freshdesk.com/" data-original-title="" title=""><div> <i class="icon-support"></i></div> <span>Support</span> </a> <a class="nav-link" target="_blank" href="http://admin.pixelstrap.com/cuba/document/index.html" data-original-title="" title=""><div> <i class="icon-settings"></i></div> <span>Document</span> </a> <a class="nav-link" target="_blank" href="http://admin.pixelstrap.com/cuba/theme/landing-page.html#frameworks" data-original-title="" title=""><div> <i class="icon-panel"></i></div> <span>Check features</span> </a> <a class="nav-link" target="_blank" href="https://1.envato.market/3GVzd" data-original-title="" title=""><div> <i class="icon-shopping-cart-full"></i></div> <span>Buy now</span> </a></div></div><div class="customizer-contain"><div class="tab-content" id="c-pills-tabContent"><div class="customizer-header"> <i class="icofont-close icon-close"></i><h5>Preview Settings</h5><p class="mb-0">Try It Real Time <i class="fa fa-thumbs-o-up txt-primary"></i></p></div><div class="customizer-body custom-scrollbar"><div class="tab-pane fade show active" id="c-pills-home" role="tabpanel" aria-labelledby="c-pills-home-tab"><h6>Layout Type</h6><ul class="main-layout layout-grid"><li data-attr="ltr" class="active"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body"><ul><li class="bg-light sidebar"></li><li class="bg-light body"> <span class="badge badge-primary">LTR</span></li></ul></div></li><li data-attr="rtl"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body"><ul><li class="bg-light body"> <span class="badge badge-primary">RTL</span></li><li class="bg-light sidebar"></li></ul></div></li><li data-attr="ltr" class="box-layout px-3"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body"><ul><li class="bg-light sidebar"></li><li class="bg-light body"> <span class="badge badge-primary">Box</span></li></ul></div></li></ul><h6 class="">Sidebar Type</h6><ul class="sidebar-type layout-grid"><li data-attr="normal-sidebar"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body"><ul><li class="bg-dark sidebar"></li><li class="bg-light body"></li></ul></div></li><li data-attr="compact-sidebar"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body"><ul><li class="bg-dark sidebar compact"></li><li class="bg-light body"></li></ul></div></li></ul><h6 class="">Sidebar settings</h6><ul class="sidebar-setting layout-grid"><li class="active" data-attr="default-sidebar"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body bg-light"> <span class="badge badge-primary">Default</span></div></li><li data-attr="border-sidebar"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body bg-light"> <span class="badge badge-primary">Border</span></div></li><li data-attr="iconcolor-sidebar"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body bg-light"> <span class="badge badge-primary">icon Color</span></div></li></ul><h6 class="">Unlimited Color</h6><ul class="layout-grid unlimited-color-layout"> <input id="ColorPicker1" type="color" value="#7366ff" name="Background"> <input id="ColorPicker2" type="color" value="#f73164" name="Background"> <button type="button" class="color-apply-btn btn btn-primary color-apply-btn">Apply</button></ul><h6>Light layout</h6><ul class="layout-grid customizer-color"><li class="color-layout" data-attr="color-1" data-primary="#7366ff" data-secondary="#f73164"><div></div></li><li class="color-layout" data-attr="color-2" data-primary="#4831D4" data-secondary="#ea2087"><div></div></li><li class="color-layout" data-attr="color-3" data-primary="#d64dcf" data-secondary="#8e24aa"><div></div></li><li class="color-layout" data-attr="color-4" data-primary="#4c2fbf" data-secondary="#2e9de4"><div></div></li><li class="color-layout" data-attr="color-5" data-primary="#7c4dff" data-secondary="#7b1fa2"><div></div></li><li class="color-layout" data-attr="color-6" data-primary="#3949ab" data-secondary="#4fc3f7"><div></div></li></ul><h6 class="">Dark Layout</h6><ul class="layout-grid customizer-color dark"><li class="color-layout" data-attr="color-1" data-primary="#4466f2" data-secondary="#1ea6ec"><div></div></li><li class="color-layout" data-attr="color-2" data-primary="#4831D4" data-secondary="#ea2087"><div></div></li><li class="color-layout" data-attr="color-3" data-primary="#d64dcf" data-secondary="#8e24aa"><div></div></li><li class="color-layout" data-attr="color-4" data-primary="#4c2fbf" data-secondary="#2e9de4"><div></div></li><li class="color-layout" data-attr="color-5" data-primary="#7c4dff" data-secondary="#7b1fa2"><div></div></li><li class="color-layout" data-attr="color-6" data-primary="#3949ab" data-secondary="#4fc3f7"><div></div></li></ul><h6 class="">Mix Layout</h6><ul class="layout-grid customizer-mix"><li class="color-layout active" data-attr="light-only"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body"><ul><li class="bg-light sidebar"></li><li class="bg-light body"></li></ul></div></li><li class="color-layout" data-attr="dark-sidebar"><div class="header bg-light"><ul><li></li><li></li><li></li></ul></div><div class="body"><ul><li class="bg-dark sidebar"></li><li class="bg-light body"></li></ul></div></li><li class="color-layout" data-attr="dark-only"><div class="header bg-dark"><ul><li></li><li></li><li></li></ul></div><div class="body"><ul><li class="bg-dark sidebar"></li><li class="bg-dark body"></li></ul></div></li></ul></div></div></div></div>').appendTo($('body'));
(function (){})();
//live customizer js
$(document).ready(function () {

     $(".customizer-color li").on('click', function() {
        $(".customizer-color li").removeClass('active');
        $(this).addClass("active");
        var color = $(this).attr("data-attr");
        var primary = $(this).attr("data-primary");
        var secondary = $(this).attr("data-secondary");
        localStorage.setItem("color", color);
        localStorage.setItem("primary", primary);
        localStorage.setItem("secondary", secondary);
        localStorage.removeItem("dark");
        $("#color" ).attr("href", "../assets/css/"+color+".css" );
        $(".dark-only").removeClass('dark-only');
        location.reload(true);
    });

    $(".customizer-color.dark li").on('click', function() {
        $(".customizer-color.dark li").removeClass('active');
        $(this).addClass("active");
        $("body").attr("class", "dark-only");
        localStorage.setItem("dark", "dark-only");
    });


    
    if(localStorage.getItem("primary") != null) {
        document.documentElement.style.setProperty('--theme-deafult', localStorage.getItem("primary"));
    }
    if(localStorage.getItem("secondary") != null) {
        document.documentElement.style.setProperty('--theme-secondary', localStorage.getItem("secondary"));
    }
    $(".customizer-links #c-pills-home-tab").click(function () {
        $(".customizer-contain").addClass("open");
        $(".customizer-links").addClass("open");
    });

    $(".close-customizer-btn").on('click', function () {
        $(".floated-customizer-panel").removeClass("active");
    });

    $(".customizer-contain .icon-close").on('click', function () {
        $(".customizer-contain").removeClass("open");
        $(".customizer-links").removeClass("open");
    });

    $(".color-apply-btn").click(function(){
        location.reload(true);
    });

    var primary = document.getElementById("ColorPicker1").value;
    document.getElementById("ColorPicker1").onchange = function () {
      primary = this.value;
      localStorage.setItem("primary", primary);
      document.documentElement.style.setProperty('--theme-primary', primary);
    };

    var secondary = document.getElementById("ColorPicker2").value;
    document.getElementById("ColorPicker2").onchange = function () {
      secondary = this.value;
      localStorage.setItem("secondary", secondary);
      document.documentElement.style.setProperty('--theme-secondary', secondary);
    };


    $(".customizer-color.dark li").on('click', function () {
        $(".customizer-color.dark li").removeClass('active');
        $(this).addClass("active");
        $("body").attr("class", "dark-only");
        localStorage.setItem("dark", "dark-only");
    });


    $(".customizer-mix li").on('click', function () {
        $(".customizer-mix li").removeClass('active');
        $(this).addClass("active");
        var mixLayout = $(this).attr("data-attr");
        $("body").attr("class", mixLayout);
    });


    $('.sidebar-setting li').on('click', function () {
        $(".sidebar-setting li").removeClass('active');
        $(this).addClass("active");
        var sidebar = $(this).attr("data-attr");
        $(".sidebar-wrapper").attr("sidebar-layout", sidebar);
    });

    $('.sidebar-main-bg-setting li').on('click', function () {
        $(".sidebar-main-bg-setting li").removeClass('active')
        $(this).addClass("active")
        var bg = $(this).attr("data-attr");
        $(".sidebar-wrapper").attr("class", "sidebar-wrapper " + bg);
    });

    $('.sidebar-type li').on('click', function () {
        // $(".sidebar-type li").removeClass('active');
        var type = $(this).attr("data-attr");

        var boxed = "";
        if ($(".page-wrapper").hasClass("box-layout")) {
            boxed = "box-layout";
        }
        switch (type) {
            case 'compact-sidebar': {
                $(".page-wrapper").attr("class", "page-wrapper compact-wrapper " + boxed);
                $(".page-body-wrapper").attr("class", "page-body-wrapper sidebar-icon");
                localStorage.setItem('page-wrapper', 'compact-wrapper');
                localStorage.setItem('page-body-wrapper', 'sidebar-icon');
                break;
            }
            case 'normal-sidebar': {
                $(".page-wrapper").attr("class", "page-wrapper horizontal-wrapper " + boxed);
                $(".page-body-wrapper").attr("class", "page-body-wrapper horizontal-menu");
                $(".logo-wrapper").find('img').attr('src', '../assets/images/logo/logo.png');
                localStorage.setItem('page-wrapper', 'horizontal-wrapper');
                localStorage.setItem('page-body-wrapper', 'horizontal-menu');
                break;
            }
            default: {
                $(".page-wrapper").attr("class", "page-wrapper compact-wrapper " + boxed);
                $(".page-body-wrapper").attr("class", "page-body-wrapper sidebar-icon");
                // $(".logo-wrapper").find('img').attr('src', '../assets/images/logo/compact-logo.png');
                localStorage.setItem('page-wrapper', 'compact-wrapper');
                localStorage.setItem('page-body-wrapper', 'sidebar-icon');
                break;
            }
        }
        // $(this).addClass("active");
        location.reload(true);
    });

    $('.main-layout li').on('click', function () {
        $(".main-layout li").removeClass('active');
        $(this).addClass("active");
        var layout = $(this).attr("data-attr");
        $("body").attr("class", layout);
        $("html").attr("dir", layout);
    });

    $('.main-layout .box-layout').on('click', function () {
        $(".main-layout .box-layout").removeClass('active');
        $(this).addClass("active");
        var layout = $(this).attr("data-attr");
        $("body").attr("class", "box-layout");
        $("html").attr("dir", layout);
    });

});