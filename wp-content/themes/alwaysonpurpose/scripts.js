(function($) {

	$.fn.tCycle = function(fadeDuration, changeDuration) {
		let index = -1, container = this;
		setInterval(function() {
			let items = container.find('li');
			index = (index + 1) % items.length;
			items.eq(index).addClass('selected').siblings().removeClass('selected');
		}, 4000);
	};

	let onResize = function() {
		let h = Math.max.apply(this, $('#testimonials li').map((i, li) => li.offsetHeight).get());
		if (h) {
			$('#testimonials').css('height', `${h + 100}px`);
			if (window.innerWidth >= 640) {
				$('.col.sidebar').children('img').css('height', `${h + 100}px`);
			}
		}
		$('.video iframe').each(function() { this.setAttribute('height', Math.round(this.offsetWidth * 9 / 16)); });
	};
	window.addEventListener('resize', onResize);
	window.addEventListener('load', function() {
		onResize();
		$('#testimonials').addClass('init').tCycle();
	});

	$(document).ready(function() {


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
