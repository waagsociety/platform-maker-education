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

      // Check if nextItem returns a textnode go to nextSibling
      if(nextItem.nodeType !=1){
        nextItem = nextItem.nextSibling;
      }

      console.log(currentItem);

  currentItem.classList.toggle( 'active' );
  ( nextItem || container.children[ 0 ] ).classList.toggle( 'active' );
  setTimeout( nextSlide.bind( null, selector ), slideDelay );
}
