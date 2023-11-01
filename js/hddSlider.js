var $ = jQuery

$(function () {
	const hddSlider = () => {
		const $amount = $('.js-hdd-amount')
		const $minus = $('.js-hdd-minus')
		const $plus = $('.js-hdd-plus')
		const $slider = $('.js-hdd-slider')

		if (!$slider.length) return

		$slider.slider({
			change: function (event, ui) {
				$amount.val(ui.value)
			},
			max: 12,
			min: 1,
			range: 'min',
			slide: function (event, ui) {
				$amount.val(ui.value)
			},
			step: 1,
			value: 6
		})

		$amount.val($slider.slider('value'))

		$plus.on('click', () => {
			$slider.slider('value', $slider.slider('value') + 1)
		})

		$minus.on('click', () => {
			$slider.slider('value', $slider.slider('value') - 1)
		})
	}

	hddSlider()
})
