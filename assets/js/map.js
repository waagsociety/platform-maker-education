L.mapbox.accessToken = 'pk.eyJ1IjoibWFydGlud2FhZyIsImEiOiJjaWo0NWt6ZWYwMDE0dXlrcm0yenVkNDR5In0.0I9xJzLubP9g3V_NTt1PhA';
// Construct a bounding box for this map that the user cannot
// move out of
var southWest = L.latLng(49.18623,2.262939),
		northEast = L.latLng(54.563967, 7.904907),
		bounds = L.latLngBounds(southWest, northEast);

var map = L.mapbox.map('makermap', 'martinwaag.9adcc834', {
	// set that bounding box as maxBounds to restrict moving the map
	// see full maxBounds documentation:
	// http://leafletjs.com/reference.html#map-maxbounds
	maxZoom: 19,
	minZoom: 6,
	zoom: 18
});

map.scrollWheelZoom.disable();
map.featureLayer.setGeoJSON(geojson);

map.featureLayer.eachLayer(function(layer) {
    // here you call `bindPopup` with a string of HTML you create - the feature
    // properties declared above are available under `layer.feature.properties`
    var content = '<h2>' + layer.feature.properties.title + '</h2>' +
        '<p>'+ ((layer.feature.properties.description != null) ? layer.feature.properties.description : "") +'</p>' +
		    '<p>'+ layer.feature.properties.adres +'</p>' +
				((layer.feature.properties.website != null) ?  "<a target='_blank' href='" + layer.feature.properties.website + "'> Bezoek website</p>" : "");

		var customOptions =
        {
        'maxWidth': '600'
        }
    layer.bindPopup(content, customOptions);
});


// zoom the map to that bounding box
map.fitBounds(bounds);


map.featureLayer.on('click', function(e) {
    map.panTo(e.layer.getLatLng());
});
