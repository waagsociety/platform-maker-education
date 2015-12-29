function init(){
	enquire.register("screen and (min-width : 768px)", initAdjustWindow(), false);
	frameLooper();
	initEventHandlers();
}

document.addEventListener("DOMContentLoaded", init);