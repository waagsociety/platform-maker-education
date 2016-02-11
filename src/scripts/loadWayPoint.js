function loadWayPoint(){
	var changeColorElements = document.querySelectorAll('[data-changecolor]');

  function forEveryElement( fun ) {
    Array.prototype.forEach.call( changeColorElements, fun );
  }

  function toggleBlack( element ) {
    element.classList.toggle( 'black' );
  }
	waypoint = new Waypoint({
		element: document.querySelector('.change-color'),
		handler: function() {
      forEveryElement( toggleBlack );
		},
		offset: 200
	});
};
