var debug = false;

function bindToggleOpen( element ) {
	element.addEventListener( 'click', toggleOpen );
}

function toggleOpen(){
	var openElement = document.querySelector( this.dataset.openselector );

	this.classList.toggle('open');
	openElement.classList.toggle('open');
	document.body.classList.toggle('noScroll');
}

function openGridView(){
	var projectContainer = document.querySelector( '.projects' );
			projectContainer.classList.toggle( 'grid-view' );
}
