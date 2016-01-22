L.mapbox.accessToken = 'pk.eyJ1IjoibWFydGlud2FhZyIsImEiOiJjaWo0NWt6ZWYwMDE0dXlrcm0yenVkNDR5In0.0I9xJzLubP9g3V_NTt1PhA';
// Construct a bounding box for this map that the user cannot
// move out of
var southWest = L.latLng(51.18623,3.262939),
		northEast = L.latLng(53.563967, 6.904907),
		bounds = L.latLngBounds(southWest, northEast);

var map = L.mapbox.map('makermap', 'martinwaag.9adcc834', {
	// set that bounding box as maxBounds to restrict moving the map
	// see full maxBounds documentation:
	// http://leafletjs.com/reference.html#map-maxbounds
	maxBounds: bounds,
	maxZoom: 19,
	minZoom: 6,
	zoom: 18
});

map.featureLayer.setGeoJSON(geojson);
// zoom the map to that bounding box
map.fitBounds(bounds);


map.featureLayer.on('click', function(e) {
    map.panTo(e.layer.getLatLng());
});
