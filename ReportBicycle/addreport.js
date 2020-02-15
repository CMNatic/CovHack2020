var mapCenter = new google.maps.LatLng(52.405395,-1.499659);
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();

function initialize(){
	var mapOptions = {
		zoom: 15,
		center: mapCenter
    };

	myMap = new google.maps.Map(document.getElementById("mapInput"), mapOptions);

    marker = new google.maps.Marker({
		map: myMap,
        position: mapCenter,
        draggable: true
    });

    google.maps.event.addListener(marker, 'dragend', markerDragged);

	function markerDragged() {
		var selectedPos = {'latLng': marker.getPosition()};
		geocoder.geocode(selectedPos, showAddressInInfoWindow);
	}

	function showAddressInInfoWindow(results) {
		if (results[0]) {
			infowindow.setContent(results[0].formatted_address);
			infowindow.open(myMap, marker);
		}
	}
}

google.maps.event.addDomListener(window, 'load', initialize);

$('#formInsertEvent').submit(function(){
	event.preventDefault();
	setDatabaseName('dbAnimal', ['AnimalObjStore', 'EventObjStore']);
	setCurrObjectStoreName('EventObjStore');
	startDB(function() {
		insertEvent(marker);

		alert("Event has addedd successfully");
	})

})
