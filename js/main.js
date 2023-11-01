var $ = jQuery;

$(function () {
	const $amount = $('.js-frequency-amount')
	const $from = $('.js-frequency-from')
	const $sliderRange = $('.js-frequency-slider')
	const $to = $('.js-frequency-to')

	$sliderRange.slider({
		range: true,
		min: 1.8,
		max: 3.5,
		step: 0.1,
		values: [0, 3.5],
		slide: function (event, ui) {
			$amount.val('от ' + ui.values[0] + ' Ghz - до ' + ui.values[1] + ' Ghz')

			const delay = function () {
				$from.html('<span>от</span> ' + ui.values[0] + ' Ghz').position({
					my: 'center top',
					at: 'center bottom',
					of: ui.handle[0],
					offset: "0, 10"
				})

				$to.html('<span>до</span> ' + ui.values[1] + ' Ghz').position({
					my: 'center top',
					at: 'center bottom',
					of: ui.handle[1],
					offset: "0, 10"
				})
			}

			setTimeout(delay, 5)
		}
	})

	$amount.val('от ' + $sliderRange.slider('values', 0) + ' Ghz - до' + $sliderRange.slider('values', 1) + ' Ghz')

	$from.text('от ' + $sliderRange.slider('values', 0) + ' Ghz')
	$to.text('до ' + $sliderRange.slider('values', 1) + ' Ghz')
})