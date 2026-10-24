/* Картка товару: пункти «Оплата / Доставка / ...» під слайдером розкривають текст під собою (відкритий лише один) */
(function () {
	var blocks = document.querySelectorAll('[data-product-info]');

	for (var b = 0; b < blocks.length; b++) {
		(function (block) {
			var tabs = block.querySelectorAll('.product-info__tab');

			function setState(tab, open) {
				var panel = document.getElementById(tab.getAttribute('aria-controls'));

				tab.setAttribute('aria-expanded', open ? 'true' : 'false');
				tab.classList.toggle('_active', open);

				if (panel) {
					panel.hidden = !open;
				}
			}

			for (var i = 0; i < tabs.length; i++) {
				tabs[i].addEventListener('click', function () {
					var open = this.getAttribute('aria-expanded') !== 'true';

					for (var j = 0; j < tabs.length; j++) {
						setState(tabs[j], false);
					}

					if (open) {
						setState(this, true);
					}
				});
			}
		})(blocks[b]);
	}
})();
