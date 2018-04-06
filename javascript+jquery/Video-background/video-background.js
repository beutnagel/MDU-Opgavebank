
// Video credit: https://videos.pexels.com/videos/video-of-people-walking-855564
function VideoBackground(options) {

	this.fullscreen = false;
	this.containerElement = "#videobg";
	this.source = "";


	// overwrite default values if options are set
	if(options) {
		for (var key in options) {
			console.log("Overwriting default option: " + key + " = " + options[key]);
		  this[key] = options[key];
		}
	}

	this.container = document.querySelector(this.containerElement);



	this.domElement = document.createElement('video');
	this.domSource = document.createElement("source");
	this.domSource.src = this.source;
	this.domElement.appendChild(this.domSource);
	this.domElement.autoplay = true;
	this.domElement.loop = true;
	this.container.appendChild(this.domElement);

	//return this;
}