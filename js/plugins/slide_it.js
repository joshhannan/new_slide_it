(function( $ ) {
	$.fn.slide_it = function( options ) {
		// DEFAULT OPTIONS
		var object = $(this);
		var settings = $.extend({
			orientation: 'horizontal',
			slide: '.slide',
			effect: 'slide',
			visible_slides: '1',
			next: '.next',
			prev: '.prev'
		}, options );

		function slider_setup() {

		}

		$(object).each(function() {
			var content = $(this).html();
			content = '<div class="slider">'+content+'</div>';
			$(this).html('');
			$(this).html(content);
		});
	return this;
	}; //  END SLIDE_IT FUNCTION
}(jQuery));