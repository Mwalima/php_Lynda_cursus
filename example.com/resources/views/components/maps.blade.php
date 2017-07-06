<!DOCTYPE html>
<html>
<head>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
<h3>My location</h3>
<div id="map"></div>
<script>
    function initMap() {
        var uluru = {lat: 52.078663, lng: 4.288788};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYCgSSWkK22mvyPpT2L8lhgjMkCGjfJ2Q&callback=initMap">
</script>
</body>
</html>