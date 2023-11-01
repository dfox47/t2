var $ = jQuery

$(function () {
	// jQuery code here
})

const heroFade = () => {
	const $fade = document.querySelector('.js-hero-fade')
	const $hero = document.querySelector('.js-hero')

	if (!$fade || !$hero) return

	const fadePercent = window.pageYOffset / $hero.offsetHeight * 1.7

	if (fadePercent > 1) {
		return
	}

	$fade.style.opacity = fadePercent
}

heroFade()

window.addEventListener('scroll', heroFade)
