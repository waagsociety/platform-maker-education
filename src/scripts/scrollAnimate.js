var plane = document.getElementById('plane'),
	_height = window.innerHeight;

function loop() {
  var scrollOffset = window.pageYOffset || window.scrollTop,
  		scale = scrollOffset / _height;
  		plane.style.transform = 'translate3d(' + scrollOffset + 'px, -' + (scrollOffset / 20) +'px, 0) scale(' + (1 - (scale / 2)) + ')';

  requestAnimationFrame(loop);
}

loop();