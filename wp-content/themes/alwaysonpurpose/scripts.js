(function($) {

	$.fn.tCycle = function(fadeDuration, changeDuration) {
		var index = 0, $items = this.children();
		var count = $items.length;
		if (count > 1) {
			$items.slice(1).fadeOut(fadeDuration);
			setInterval(function() {
				$items.eq(index).fadeOut(fadeDuration);
				index = (index + 1) % count;
				$items.eq(index).fadeIn(fadeDuration);
			}, fadeDuration * 2 + changeDuration);
		}
		return this;
	};

	$(document).ready(function() {
		$('#testimonials').tCycle(1000, 5000);
	});
})(jQuery);
