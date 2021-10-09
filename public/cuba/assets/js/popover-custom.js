"use strict";
$(function () {
    $('.example-popover').popover({
        container: 'body'
    });
    var dcolor = $(".example-popover").attr("data-theme");
    if(dcolor == "dark") {
        $(".popover").addClass("bg-dark");
    }
})