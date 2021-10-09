"use strict";
var radial_tooltip = {
    init: function() {
	$('[data-toggle="tooltip"]').tooltip();
	    $('[data-toggle="popover"]').popover({
	        animation: true,
	        delay: {
	            show: 100,
	            hide: 100
	        }
	    });
	}
};
(function($) {
	"use strict";
    radial_tooltip.init()
})(jQuery);