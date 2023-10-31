// toggle
document.querySelectorAll('.js-options-toggle').forEach((btn) => {
	btn.addEventListener('click', () => {
		document.querySelectorAll('.js-options-block').forEach((e) => {
			e.classList.toggle('active')
		})
	})
})
