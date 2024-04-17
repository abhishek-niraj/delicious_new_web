<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div id="map"></div>

    </div>
</body>

</html>
<script>
    $(document).ready(function() {

        mapboxgl.accessToken = 'pk.eyJ1IjoiYWJoaXNoZWtuaXJhaiIsImEiOiJjbHV6ZDVienExN2J1Mmlsa3oxaGRxNHU1In0.Tu75Wd1lSRJxQUTG086NWA';
        const map = new mapboxgl.Map({
            container: 'map',
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [76.849666, 30.334627],

            zoom: 13
        });

        // Add the control to the map.
        map.addControl(
            new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl
            })
        );
        var marker = new mapboxgl.Marker()
            .setLngLat([76.832700, 30.337040]) // Set the marker's coordinates [longitude, latitude]
            .addTo(map);
        var marker = new mapboxgl.Marker()
            .setLngLat([76.86888261121524, 30.347723201718132]) // Set the marker's coordinates [longitude, latitude]
            .addTo(map);

    })
</script>