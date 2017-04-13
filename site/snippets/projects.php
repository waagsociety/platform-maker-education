<section class="projects grid-view">
<header class="sectionHeader">
   <div class="change-color">
  	 <h2>Projecten</h2>
     <p>Laat je inspireren door deze projecten voor in de klas! Voeg projecten toe of stuur een <a href="mailto:projecten@makereducation.nl?subject=Project aanmelden Openthings">e-mail</a> - <a href="<?php echo $site->url() ?>/uitleg_openthings_all.pdf" target="_blank">Uitleg Openthings</a></p>
     <a href="https://openthings.wiki" class="btn btn-3" target="_blank">Project plaatsen</a>
     <a href="https://openthings.wiki/tag/48" class="btn btn-3" target="_blank">Meer projecten</a>
   </div>
 </header>
<!-- 	<svg version="1.1" id="girdbutton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
	<rect class="st0" width="19" height="19"/>
	<rect y="21" class="st0" width="19" height="19"/>
	<rect x="21" class="st0" width="19" height="19"/>
	<rect x="21" y="21" class="st0" width="19" height="19"/>
	</svg> -->
	<!-- Projects loaded with Javascript -->
</section>


<script type="text/javascript">
	fetch(<?php echo $page->api()->text() ?>)
	.then(function(response) {
	  return response.json()
	})
	.then(function(json) {
	  json.map(function( projects, index ){

	    var li = document.createElement('li'),
	        descriptionContainer = document.createElement('div'),
	        descriptionTitleContainer = document.createElement('h1'),
	        descriptionBodyContainer = document.createElement('p'),
	        projectLink = document.createElement('a'),
	        projectContainer = document.querySelector('.projects');


	    li.classList.add("projectItem");

	    if( !index ) li.classList.add("active"); // Element 0 receives class active

	    projectLink.classList.add("btn");
      projectLink.setAttribute('target', '_blank');
	    projectLink.classList.add("btn-2");

	    li.style.backgroundImage = "url('" + projects.project.icon + "')";

	    descriptionTitleContainer.innerHTML = projects.project.title;
	    descriptionBodyContainer.innerHTML = projects.project.teaser;
	    projectLink.innerHTML = "Bekijk dit project";
	    projectLink.href = projects.project.url;
	    projectContainer.appendChild(li);
	    li.appendChild( descriptionContainer );

	    descriptionContainer.appendChild( descriptionTitleContainer );
	    descriptionContainer.appendChild( descriptionBodyContainer );
	    descriptionContainer.appendChild( projectLink );
	  });
	  // initSlider( '.projects' );
	})

	.catch(function(ex) {
	  console.log('parsing failed', ex)
	})
</script>
