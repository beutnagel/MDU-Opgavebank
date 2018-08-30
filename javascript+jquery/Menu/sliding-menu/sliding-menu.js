
let toggleMenuButton = document.querySelector('.menu__toggleButton');
let slidingMenu = document.querySelector('.sliding-menu');

toggleMenuButton.addEventListener('click', function () {
	console.log('clicked on the button');

	slidingMenu.classList.toggle('sliding-menu--active');
});