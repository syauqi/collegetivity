$(".toggle-nav").click(function () {
    $('#sidebar-links .nav-menu').css("left", "0px");
});
$(".mobile-back").click(function () {
    $('#sidebar-links .nav-menu').css("left", "-410px");
});
$(".page-wrapper").attr("class", "page-wrapper " + localStorage.getItem('page-wrapper'));
$(".page-body-wrapper").attr("class", "page-body-wrapper " + localStorage.getItem('page-body-wrapper'));
if (localStorage.getItem("page-wrapper") === null) {
    $(".page-wrapper").addClass("compact-wrapper");
    $(".page-body-wrapper").addClass("sidebar-icon");
}

// left sidebar and vertical menu
if ($('#pageWrapper').hasClass('compact-wrapper')) {
    jQuery('.sidebar-title').append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
    jQuery('.sidebar-title').click(function () {
        jQuery('.sidebar-title').removeClass('active').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
        jQuery('.sidebar-submenu, .menu-content').slideUp('normal');
        jQuery('.menu-content').slideUp('normal');
        if (jQuery(this).next().is(':hidden') == true) {
            jQuery(this).addClass('active');
            jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
            jQuery(this).next().slideDown('normal');
        } else {
            jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
        }
    });
    jQuery('.sidebar-submenu, .menu-content').hide();
    jQuery('.submenu-title').append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
    jQuery('.submenu-title').click(function () {
        jQuery('.submenu-title').removeClass('active').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
        jQuery('.submenu-content').slideUp('normal');
        if (jQuery(this).next().is(':hidden') == true) {
            jQuery(this).addClass('active');
            jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
            jQuery(this).next().slideDown('normal');
        } else {
            jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
        }
    });
    jQuery('.submenu-content').hide();
} else if ($('#pageWrapper').hasClass('horizontal-wrapper')) {
    var contentwidth = jQuery(window).width();
    if ((contentwidth) < '992') {
        $('#pageWrapper').removeClass('horizontal-wrapper').addClass('compact-wrapper');
        $('.page-body-wrapper').removeClass('horizontal-menu').addClass('sidebar-icon');
        jQuery('.submenu-title').append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
        jQuery('.submenu-title').click(function () {
            jQuery('.submenu-title').removeClass('active');
            jQuery('.submenu-title').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
            jQuery('.submenu-content').slideUp('normal');
            if (jQuery(this).next().is(':hidden') == true) {
                jQuery(this).addClass('active');
                jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
                jQuery(this).next().slideDown('normal');
            } else {
                jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
            }
        });
        jQuery('.submenu-content').hide();

        jQuery('.sidebar-title').append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
        jQuery('.sidebar-title').click(function () {
            jQuery('.sidebar-title').removeClass('active');
            jQuery('.sidebar-title').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
            jQuery('.sidebar-submenu, .menu-content').slideUp('normal');
            if (jQuery(this).next().is(':hidden') == true) {
                jQuery(this).addClass('active');
                jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
                jQuery(this).next().slideDown('normal');
            } else {
                jQuery(this).find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>');
            }
        });
        jQuery('.sidebar-submenu, .menu-content').hide();
    }
}

// toggle sidebar
$nav = $('.sidebar-wrapper');
$header = $('.page-header');
$toggle_nav_top = $('.toggle-sidebar');
$toggle_nav_top.click(function () {
    $this = $(this);
    $nav = $('.sidebar-wrapper');
    $nav.toggleClass('close_icon');
    $header.toggleClass('close_icon');
});

$(window).resize(function () {
    $nav = $('.sidebar-wrapper');
    $header = $('.page-header');
    $toggle_nav_top = $('.toggle-sidebar');
    $toggle_nav_top.click(function () {
        $this = $(this);
        $nav = $('.sidebar-wrapper');
        $nav.toggleClass('close_icon');
        $header.toggleClass('close_icon');
    });
});

$body_part_side = $('.body-part');
$body_part_side.click(function () {
    $toggle_nav_top.attr('checked', false);
    $nav.addClass('close_icon');
    $header.addClass('close_icon');
});

//    responsive sidebar
var $window = $(window);
var widthwindow = $window.width();
(function ($) {
    "use strict";
    if (widthwindow <= 991) {
        $toggle_nav_top.attr('checked', false);
        $nav.addClass("close_icon");
        $header.addClass("close_icon");
    }
})(jQuery);
$(window).resize(function () {
    var widthwindaw = $window.width();
    if (widthwindaw <= 991) {
        $toggle_nav_top.attr('checked', false);
        $nav.addClass("close_icon");
        $header.addClass("close_icon");
    } else {
        $toggle_nav_top.attr('checked', true);
        $nav.removeClass("close_icon");
        $header.removeClass("close_icon");
    }
});

// horizontal arrows
var view = $("#sidebar-menu");
var move = "500px";
var leftsideLimit = -500

// var Windowwidth = jQuery(window).width();
// get wrapper width
var getMenuWrapperSize = function () {
    return $('.sidebar-wrapper').innerWidth();
}
var menuWrapperSize = getMenuWrapperSize();

if ((menuWrapperSize) > '1460') {
    var sliderLimit = -2900
} else if ((menuWrapperSize) >= '992') {
    var sliderLimit = -1000
} else {
    var sliderLimit = -0
}

$("#left-arrow").addClass("disabled");
$("#right-arrow").click(function () {
    var currentPosition = parseInt(view.css("marginLeft"));
    if (currentPosition >= sliderLimit) {
        $("#left-arrow").removeClass("disabled");
        view.stop(false, true).animate({
            marginLeft: "-=" + move
        }, {
            duration: 400
        })
        if (currentPosition == sliderLimit) {
            $(this).addClass("disabled");
            console.log("sliderLimit", sliderLimit);
        }
    }
});

$("#left-arrow").click(function () {
    var currentPosition = parseInt(view.css("marginLeft"));
    if (currentPosition < 0) {
        view.stop(false, true).animate({
            marginLeft: "+=" + move
        }, {
            duration: 400
        })
        $("#right-arrow").removeClass("disabled");
        $("#left-arrow").removeClass("disabled");
        if (currentPosition >= leftsideLimit) {
            $(this).addClass("disabled");
        }
    }

});

// page active
$(".sidebar-wrapper nav").find("a").removeClass("active");
$(".sidebar-wrapper nav").find("li").removeClass("active");

var current = window.location.pathname
$(".sidebar-wrapper nav ul>li a").filter(function () {

    var link = $(this).attr("href");
    if (link) {
        if (current.indexOf(link) != -1) {
            $(this).parents().children('a').addClass('active');
            $(this).parents().parents().children('ul').css('display', 'block');
            $(this).addClass('active');
            $(this).parent().parent().parent().children('a').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
            $(this).parent().parent().parent().parent().parent().children('a').find('div').replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>');
            return false;
        }
    }
});

$('.left-header .mega-menu .nav-link').on('click', function (e) {
    $(this).toggleClass("active");
    $(this).parent().children('.mega-menu-container').toggleClass("d-block").slideToggle();
});

$(".left-header .level-menu .header-level-menu").css('display', 'none');
$('.left-header .level-menu .nav-link').on('click', function (e) {
    $(this).toggleClass("active");
    $(this).parent().children('.header-level-menu').toggleClass("d-block").slideToggle();
});

$('.left-header .link-section > div').on('click', function (e) {
    if ($(window).width() <= 1199) {
        $(".left-header .link-section > div").removeClass("active");
        $(this).toggleClass("active");
        $(this).parent().children('ul').toggleClass("d-block").slideToggle();
    }
});

if ($(window).width() <= 1199) {
    $(".left-header .link-section").children('ul').css('display', 'none');
    $(this).parent().children('ul').toggleClass("d-block").slideToggle();
}
if ($(window).width() <= 991) {
    $('.sidebar-wrapper .back-btn').on('click', function (e) {
        $(".page-header").toggleClass("close_icon");
        $(".sidebar-wrapper").toggleClass("close_icon");
    });
}

    $('.custom-scrollbar').animate({
        scrollTop: $('a.sidebar-link.sidebar-title.active').offset().top - 200
    }, 1000);