<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geo BAKAMLA</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>

     <style>
        #map { height: 880px; }
     </STYLE>
</head>
<body>
   <h1>Peta Laut Batas Yurisdiksi Indonesia</b><br />created m.yuda</h1>
   <div id="map"></div>
</body>



<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>




     <script>
        const map = L.map('map').setView([-0.3369505989886523, 113.1937321434109], 6);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const marker = L.marker([-0.3369505989886523, 113.1937321434109]).addTo(map)
    .bindPopup('<b>NEGARA KESATUAN REPUBLIK INDONESIA</b><br />BAKAMLA-RI.').openPopup();

const circle = L.circle([-6.203212, 106.846665], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map).bindPopup('Titik Point Markas Besar BAKAMLA-RI.');

const polygon = L.polygon([
    [-6.203534, 106.845482],
    [-6.203283, 106.845836],
    [-6.203771, 106.846196],
    [-6.204087, 106.845847]
]).addTo(map).bindPopup('Luas Wilayah Gedung Mabes BAKAMLA-RI.');


const popup = L.popup()
    .setLatLng([-6.203177919544134, 106.84608739251729])
    .setContent('Markas Besar BAKAMLA-RI.')
    .openOn(map);

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent(`You clicked the map at ${e.latlng.toString()}`)
        .openOn(map);
}

map.on('click', onMapClick);


     </script>
</html>