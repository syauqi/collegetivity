"use strict";
var masonry_gallery = {
	init: function() {
		$('.grid').isotope({
			itemSelector: '.grid-item'
		});
	}
};
(function($) {
	"use strict";
    masonry_gallery.init();
})(jQuery);