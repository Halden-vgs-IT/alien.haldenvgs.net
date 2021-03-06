paceOptions = {
    elements: true
};

// Accepts any class name
var rellax = new Rellax('.rellax');

//  map
var map = L.map('map').setView([59.119549, 11.387536], 13.3);
L.tileLayer('https://opencache.statkart.no/gatekeeper/gk/gk.open_gmaps?layers=topo4&zoom={z}&x={x}&y={y}', {
    attribution: '<a href="http://www.kartverket.no/">Kartverket</a>'
}).addTo(map);
var marker = L.marker([59.119549, 11.387536]).addTo(map);
marker.bindPopup("<b>Torget</b><br>Halden").openPopup();