(function($) {

	$.fn.tCycle = function(fadeDuration, changeDuration) {
		let index = -1, container = this;
		setInterval(function() {
			let items = container.find('li');
			index = (index + 1) % items.length;
			items.eq(index).addClass('selected').siblings().removeClass('selected');
		}, 4000);
		/*
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
		*/
	};

	window.addEventListener('load', function() {
		let h = Math.max.apply(this, $('#testimonials li').map((i, li) => li.offsetHeight).get());
		if (h) {
			$('#testimonials').css('height', `${h + 100}px`).addClass('init').tCycle();
		}
	});

	$(document).ready(function() {

		$('.video iframe').each(function() { this.style.height = Math.round(this.offsetWidth * 9 / 16) + 'px'; });

	}).on('click', '.read-more-btn', e => {

		let p = $(e.currentTarget).closest('.post-wrapper');
		if ('apiRequest' in wp) Promise.all([wp.apiRequest({
			namespace: wp.api.versionString,
			endpoint: 'posts',
			data: {
				include: p.data('id')
			}
		}), new Promise(r => {
			p.addClass('loading');
			setTimeout(r, 100);
		})]).then(values => {
			let posts = values[0], c = p.find('.post-content').clone().addClass('post-content--full').empty();
			p.addClass('loaded').removeClass('loading');
			if (posts && posts.length == 1) {
				c.html(posts[0].content.rendered).insertBefore(p.find('.post-content'));
				setTimeout(() => {
					c.children().each((i, el) => el.style.transitionDelay = `${i * 100}ms`);
				}, 10);
				setTimeout(() => {
					c.children().css('opacity','1');
				}, 200);
			}
		});

	}).on('click', '.burger-btn', e => {

		document.body.dataset.isMenuOpen = document.body.dataset.isMenuOpen != 'true';

	});


})(jQuery);
