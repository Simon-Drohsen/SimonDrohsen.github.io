let map;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 47.1341481, lng: 8.1933634 },
        zoom: 15,
    });
}