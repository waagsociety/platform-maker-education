var myHeaders = new Headers();

var myInit = { method: 'GET',
               headers: myHeaders,
               mode: 'no-cors',
               cache: 'default' };

var myRequest = new Request('assets/json/projects.json',myInit);

fetch(myRequest,myInit)
.then(function(response) {
  return response.json()
})
.then(function(json) {
  json.map(function( projects, index ){


    console.log(projects.project.title);

    var li = document.createElement('li'),
        descriptionContainer = document.createElement('div'),
        descriptionTitleContainer = document.createElement('h1'),
        descriptionBodyContainer = document.createElement('p'),
        projectLink = document.createElement('a'),
        moreLessons = document.createElement('a'),
        projectContainer = document.querySelector('.projects');

    
    li.classList.add("projectItem");

    if( !index ) li.classList.add("active"); // Element 0 receives class active

    projectLink.classList.add("btn");
    moreLessons.classList.add("btn");
    projectLink.classList.add("btn-2");
    moreLessons.classList.add("btn-2");

    li.style.backgroundImage = "url('" + projects.project.icon + "')";

    descriptionTitleContainer.innerHTML = projects.project.title;
    descriptionBodyContainer.innerHTML = projects.project.teaser;
    projectLink.innerHTML = "Bekijk deze les";
    moreLessons.innerHTML = "Meer lesmateriaal";
    projectLink.href = projects.project.url;
    moreLessons.href = "https://www.openthings.wiki/tag/48";
    projectContainer.appendChild(li);
    li.appendChild( descriptionContainer );

    descriptionContainer.appendChild( descriptionTitleContainer );
    descriptionContainer.appendChild( descriptionBodyContainer );
    descriptionContainer.appendChild( projectLink );
    descriptionContainer.appendChild( moreLessons );
  });
  initSlider( '.projects' );
})

.catch(function(ex) {
  console.log('parsing failed', ex)
})