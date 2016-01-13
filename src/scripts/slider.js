var slideDelay = 10000,
    stopSlide = false;

function initSlider(selector){
  setTimeout( nextSlide.bind ( null, selector ), slideDelay);
};

function nextSlide( selector ){
  if( stopSlide ) return;
  var container = document.querySelector( selector ),
      currentItem = container.querySelector( '.active' ),
      nextItem = currentItem.nextSibling;

  currentItem.classList.toggle( 'active' );
  ( nextItem || container.children[ 0 ] ).classList.toggle( 'active' );

  setTimeout( nextSlide.bind( null, selector ), slideDelay );
}