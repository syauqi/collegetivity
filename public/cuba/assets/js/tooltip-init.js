(function($) {
	"use strict";
	var tooltip_init = {
		init: function() {
			$("button").tooltip();
			$("a").tooltip();
			$("input").tooltip();
			$("img").tooltip();
		}
	};
    tooltip_init.init()
})(jQuery);