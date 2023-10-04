document.addEventListener('DOMContentLoaded', function () {
	const openButton = document.getElementById('openPopup')
	const popupContainer = document.getElementById('popupContainer')
	const closePopupButton = document.getElementById('closePopup')
	const resumeForm = document.getElementById('resumeForm')

	// Open pop-up when the button is clicked
	openButton.addEventListener('click', function () {
		popupContainer.style.display = 'block'
	})

	// Close pop-up when the user clicks the close button
	closePopupButton.addEventListener('click', function () {
		popupContainer.style.display = 'none'
	})

	// Close pop-up when the user clicks outside the content
	popupContainer.addEventListener('click', function (event) {
		if (event.target === popupContainer) {
			popupContainer.style.display = 'none'
		}
	})

	// Prevent the form from submitting (you can add form submission logic here)
	resumeForm.addEventListener('submit', function (event) {
		event.preventDefault()
		// Add logic to handle form submission (e.g., send data to the server)
		// Then, close the pop-up
		popupContainer.style.display = 'none'
	})
})
