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
			$from.text('от ' + ui.values[0] + ' Ghz')
			$to.text('до ' + ui.values[1] + ' Ghz')
		}
	})

	$amount.val('$' + $sliderRange.slider('values', 0) + ' - $' + $sliderRange.slider('values', 1))

	$from.text($sliderRange.slider('values', 0))
	$to.text($sliderRange.slider('values', 1))
})