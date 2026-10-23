/* Банер «Даруємо знижку на перше замовлення»: показується один раз, далі — cookie first_order_banner */
(function () {
	var banner = document.getElementById('first-order-banner');

	if (!banner) {
		return;
	}

	var COOKIE_NAME = 'first_order_banner';
	var SHOW_DELAY = 1500;

	if (document.cookie.split('; ').indexOf(COOKIE_NAME + '=1') !== -1) {
		banner.parentNode.removeChild(banner);
		return;
	}

	function remember() {
		document.cookie = COOKIE_NAME + '=1; path=/; max-age=31536000; SameSite=Lax';
	}

	function open() {
		banner.classList.add('_active');
		banner.setAttribute('aria-hidden', 'false');
		remember();
	}

	function close() {
		banner.classList.remove('_active');
		banner.setAttribute('aria-hidden', 'true');
	}

	var closeButtons = banner.querySelectorAll('[data-first-order-banner-close]');

	for (var i = 0; i < closeButtons.length; i++) {
		closeButtons[i].addEventListener('click', close);
	}

	document.addEventListener('keydown', function (event) {
		if (event.key === 'Escape' && banner.classList.contains('_active')) {
			close();
		}
	});

	setTimeout(open, SHOW_DELAY);
})();
