console.log('This javascript file just loaded');
function initiate() {
	console.log('initiate() function called');
	click_btn = document.getElementById('action');
	click_btn.addEventListener('click',	animate);
}

function animate() {
	console.log('animate() function called');
	var box = document.getElementById('box');
	box.className = "animated wobble";
}
