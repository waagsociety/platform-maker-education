function initEventHandlers() {
	// var gridViewBtn = document.getElementById( 'girdbutton' );
	// 		gridViewBtn.addEventListener( 'click', openGridView );

	if(debug){
		console.log('initing event handlers');
	}
	/*
		Document query selector doesn't return an array. Use array.prototype method for each.
		Select every data-openselector and bind an evenlistener to it.
	*/
  	Array.prototype.forEach.call( document.querySelectorAll('[data-openselector]'), bindToggleOpen );
}
