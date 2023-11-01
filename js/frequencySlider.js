var $ = jQuery

$(function () {
	const frequencySlider = () => {
		const $amount = $('.js-frequency-amount')
		const $from = $('.js-frequency-from')
		const $slider = $('.js-frequency-slider')
		const $to = $('.js-frequency-to')

		if (!$slider.length) return

		$slider.slider({
			max: 3.5,
			min: 1.8,
			range: true,
			step: 0.1,
			values: [0, 3.5],
			slide: function (event, ui) {
				$amount.val('от ' + ui.values[0] + ' Ghz - до ' + ui.values[1] + ' Ghz')

				setTimeout(() => {
					if (ui.handleIndex === 0) {
						$from.html('<span>от</span> ' + ui.values[0] + ' Ghz').position({
							my: 'left top',
							at: 'left bottom',
							of: ui.handle,
							offset: "0, 10"
						})

						return false
					}

					$to.html('<span>до</span> ' + ui.values[1] + ' Ghz').position({
						my: 'right top',
						at: 'right bottom',
						of: ui.handle,
						offset: "0, 10"
					})
				}, 5)
			}
		})

		$amount.val('от ' + $slider.slider('values', 0) + ' Ghz - до' + $slider.slider('values', 1) + ' Ghz')

		$from.html('<span>от</span> ' + $slider.slider('values', 0) + ' Ghz')

		$to.html('<span>до</span> ' + $slider.slider('values', 1) + ' Ghz').css('left', $slider.width() - 50)
	}

	frequencySlider()
})