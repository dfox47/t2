// toggle
document.querySelectorAll('.js-options-toggle').forEach((btn) => {
	btn.addEventListener('click', () => {
		const $id = btn.dataset.id

		document.querySelectorAll('.js-options-block[data-id="' + $id + '"]').forEach((e) => {
			e.classList.toggle('active')
		})
	})
})
