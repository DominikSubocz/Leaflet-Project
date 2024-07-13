

<style>

#map {
    height: 600px; 
    width:100%;
}


</style>

<div>
    <div class="path-info">
        <h4>Path name:</h4> <p><?php echo $pathName; ?></p>
        <div class="user-path-controls">
            <button onclick="reversePath()" type="button">Reverse Path <i class="fa fa-exchange" aria-hidden="true"></i> </button>
        </div>
    </div>
    <div id="map"></div>
    <div id="controls"></div>
</div>
<script>

var map = L.map('map')
.setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
}).addTo(map);

const searchParams = new URLSearchParams(window.location.search);

const pathId = searchParams.get('id');


var waypoints = [];

function loadPath(){

const xhttp = new XMLHttpRequest();
xhttp.onload = function(){
    const myObj = JSON.parse(this.responseText);

    if(myObj != ""){
        console.log(myObj);
        waypoints = myObj;
        updateRoutingControl();
    }
    

}
xhttp.open("GET", "update_path.php?action=load&path_id=" + pathId);
xhttp.send();

}




loadPath();

var routingControl;

var redMarker = L.AwesomeMarkers.icon({
    icon: 'dot-circle-o',
    prefix: 'fa',
    markerColor: 'red'
  });

    
function onMapClick(e) {

    addMarker(e);

}

function addMarker(e){
    // Add marker to map at click location; add popup window

    var newMarker = new L.marker(e.latlng).addTo(map);

    waypoints.push(e.latlng);
    console.log(waypoints);

    updateRoutingControl();
    updatePath();

}


function updatePath(action){
    const xhttp = new XMLHttpRequest();
    const pathPoints = JSON.stringify(waypoints);
    xhttp.open("GET", "update_path.php?action=update" + "&waypoints=" + pathPoints + "&path_id=" + pathId);
    xhttp.send();
}


function updateRoutingControl() {
    if (waypoints.length > 1) {
        // Remove the previous routing control if it exists
        if (routingControl) {
            map.removeControl(routingControl);
        }

        // Create a new routing control with OSRM service
        routingControl = L.Routing.control({
            waypoints: waypoints,
            router: L.Routing.osrmv1({
                serviceUrl: 'https://router.project-osrm.org/route/v1'
            })
        }).addTo(map);
        routingControl._map = map;
        var controlDiv = routingControl.onAdd(map);
        document.getElementById('controls').appendChild(controlDiv);
    }


}

function reversePath(){
    waypoints = waypoints.reverse();
    updateRoutingControl();
    updatePath();
}







map.on('click', onMapClick);


const cities = L.layerGroup();
const mLittleton = L.marker([51.517609, -0.066261]).bindPopup('Starting Point: Whitechapel.').addTo(cities);
const mDenver = L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.').addTo(cities);
const mAurora = L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.').addTo(cities);
const mGolden = L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.').addTo(cities);
const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
});

const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});




const baseLayers = {
	'OpenStreetMap': osm,
	'OpenStreetMap.HOT': osmHOT
};

const overlays = {
	'Cities': cities
};

const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

const crownHill = L.marker([39.75, -105.09]).bindPopup('This is Crown Hill Park.');
const rubyHill = L.marker([39.68, -105.00]).bindPopup('This is Ruby Hill Park.');

const parks = L.layerGroup([crownHill, rubyHill]);

const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
});
layerControl.addBaseLayer(openTopoMap, 'OpenTopoMap');
layerControl.addOverlay(parks, 'Parks');

var latlngs = [
    [51.517503, -0.065789],
    [51.521668,-0.046692]
]; 




    </script>