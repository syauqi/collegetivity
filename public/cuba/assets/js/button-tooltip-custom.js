"use strict";
var button_tooltip_custom = {
    init: function() {
		$("button").hover(function() {
        	var buttontooltiptext = $(this).attr("class");
        	$("button").attr("data-original-title", buttontooltiptext);
		});
		$("button").tooltip();
		$("a").tooltip();
		$("input").tooltip();
	}
};
(function($) {
	"use strict";
    button_tooltip_custom.init()
})(jQuery);