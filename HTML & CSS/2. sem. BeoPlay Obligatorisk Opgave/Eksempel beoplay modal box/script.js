document.getElementById("close-box").addEventListener("click", 
	hideModalBox);

function hideModalBox() {
	console.log("du klikkede på mig");

	var box = document.getElementById("modal-box");
	box.className = "hide";
}