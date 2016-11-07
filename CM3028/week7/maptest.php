<!DOCTYPE html>
<html>
	<head>
   		<title>Map Demo</title>
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWk-s0B_U56XHV6VN-31PRt8J_XyFqeA" type="text/JavaScript"></script>


        <script type="text/JavaScript">
            function load() {
                var map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(47.6145, -122.3418),
                    zoom: 13,
                    mapTypeId: 'roadmap'
                });

                downloadUrl("locations.php", function(data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName("marker");
                    for (var i = 0; i < markers.length; i++) {
                        var point = new google.maps.LatLng(
                            parseFloat(markers[i].getAttribute("lat")),
                            parseFloat(markers[i].getAttribute("lng")));
                        var marker = new google.maps.Marker({
                            map: map,
                            position: point
                        });
                    }
                });

                }

            function downloadUrl(url,callback) {
                var request = window.ActiveXObject ?
                    new ActiveXObject('Microsoft.XMLHTTP') :
                    new XMLHttpRequest;

                request.onreadystatechange = function() {
                    if (request.readyState == 4) {
                        callback(request, request.status);
                    }
                };

                request.open('GET', url, true);
                request.send(null);
            }

        </script>



    </head>

    <body onload="load()">
        <div id="map" style="width: 900px; height: 700px"></div>
    </body>

