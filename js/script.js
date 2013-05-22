$(document).on('pageshow', '#index', initMap);
$(document).on('pageshow', '#addPoint', prepareForm);


function initMap() {


    var myOptions = {
        zoom:7,
        center:new google.maps.LatLng(50.76, 11.64),
        mapTypeId:google.maps.MapTypeId.ROADMAP
    }

    map = new google.maps.Map(
        document.getElementById('map'),
        myOptions
    );

    navigator.geolocation.getCurrentPosition(
        function (position) {


            var userPos = new google.maps.LatLng(
                position.coords.latitude,
                position.coords.longitude
            );

            map.panTo(userPos);
            map.setZoom(16);

            var marker = new google.maps.Marker({
                map:map,
                position:userPos,
                animation:google.maps.Animation.DROP,
                icon: '../img/home.png'
            });

            var circle = new google.maps.Circle({
                center:userPos,
                radius:position.coords.accuracy,
                map:map,
                fillColor:'#0000FF',
                fillOpacity:0.2,
                strokeColor:'#0000FF',
                strokeOpacity:0.2
            });
        }
    );

    $.getJSON('../php/listPoints.php', displayPoints);
}

function displayPoints(points) {
    for (var i = 0; i < points.length; i++) {

        var markerPos = new google.maps.LatLng(
            parseFloat(points[i].lat),
            parseFloat(points[i].lng)
        );

        var iconPath = 'img/public.png';
        if (points[i].public == 0) {
            iconPath = 'img/private.png';
        }

        var marker = new google.maps.Marker({
            map:map,
            position: markerPos,
            icon: iconPath,
            title: points[i].name
        });

        infoWindow = new google.maps.InfoWindow();

        google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(this.title);
            infoWindow.open(map, this);
        });
    }
}

function prepareForm() {
    $.mobile.loading('show', {
        text:'Warte auf GPS Signal',
        textVisible:true
    });

    navigator.geolocation.getCurrentPosition(
        LocationOk, LocationError
    );
}

function LocationError() {
    $.mobile.loading('hide');
    alert('Leider ist die Bestimmung der Position nicht möglich');
    $.mobile.changePage('#index');
}

function LocationOk(position) {
    $.mobile.loading('hide');

    $('#addPointForm input[name="lat"]').val(position.coords.latitude);
    $('#addPointForm input[name="lng"]').val(position.coords.longitude);

    doReverseGeoCoding(position);
}

function doReverseGeoCoding(position) {
    var geocoder = new google.maps.Geocoder(),
        userPos = new google.maps.LatLng(
            position.coords.latitude,
            position.coords.longitude
        );

    geocoder.geocode(
        {latLng: userPos},
        function (results, status) {
            if (status == 'OK') {
                if (results[0]) {
                    $('#geocodedAdress').text(
                        results[0].formatted_address
                    );
                }
            }
        }
    );
}











