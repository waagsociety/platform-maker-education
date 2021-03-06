mapboxgl.accessToken = 'pk.eyJ1IjoibWFydGlud2FhZyIsImEiOiJjaWo0NWt6ZWYwMDE0dXlrcm0yenVkNDR5In0.0I9xJzLubP9g3V_NTt1PhA';

var sw = new mapboxgl.LngLat(3.262939, 51.18623),
	ne = new mapboxgl.LngLat(6.904907, 53.563967),
	llb = new mapboxgl.LngLatBounds(sw, ne);

var map = new mapboxgl.Map({
    container: 'makermap', // container id
    style: 'mapbox://styles/martinwaag/cij45sp0h002fatm8r58b8r1j', //hosted style id
    maxBounds: llb, // Sets the bounds of the map, disable dragging outside of the bounds
    zoom: 1, // Sets starting zoom level
    maxZoom: 10 // Sets max zoom to the map
});

map.fitBounds(llb);