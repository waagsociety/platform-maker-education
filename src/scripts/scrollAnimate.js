var plane = document.getElementById('plane'),
    _height = window.innerHeight,
    scrollOffset = 0,
    scale = 0;

function loop() {
    var scrollOffset = window.pageYOffset || window.scrollTop,
    scale = scrollOffset / _height;
    plane.style.transform = 'translate(' + scrollOffset + 'px, -' + (scrollOffset / 20) +'px) scale(' + (1 - (scale / 2)) + ')';
    requestAnimationFrame(loop);
}
