function loadMapScenario() {
    var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
        center: new Microsoft.Maps.Location(1.297745, 103.814809),
        zoom: 13
    });

    Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {
        var directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);
        // Set Route Mode to driving
        directionsManager.setRequestOptions({ routeMode: Microsoft.Maps.Directions.RouteMode.driving });
        var waypoint1 = new Microsoft.Maps.Directions.Waypoint({ 
            address: 'Boufe Boutique Cafe',
             location: new Microsoft.Maps.Location(1.297745, 103.814809),
            });
        var waypoint2 = new Microsoft.Maps.Directions.Waypoint({ address: 'Gardens by the Bay', location: new Microsoft.Maps.Location(1.277222, 103.862939) });
        directionsManager.addWaypoint(waypoint1);
        directionsManager.addWaypoint(waypoint2);
        directionsManager.calculateDirections();

        directionsManager.setRenderOptions({
            drivingPolylineOptions: {
                strokeColor: '#e9b30e',
                strokeThickness: 4
            }
        });
    });
    markersData = [
        {
            location_latitude: 1.297745,
            location_longitude: 103.814809
        },
        {
            location_latitude: 1.277222,
            location_longitude: 103.862939
        },
        {
            location_latitude: 1.286792,
            location_longitude: 103.839495
        },
        {
            location_latitude: 1.280799,
            location_longitude: 103.847102
        },
        {
            location_latitude: 1.275337,
            location_longitude: 103.815249
        }
    ];
    var pushpins = Microsoft.Maps.TestDataGenerator.getPushpins(5, map.getBounds(),
        {
            icon: '../assets/images/icon/map/car.png',
        }
    );
    

    for (var i = 0; i < pushpins.length; i++) {

        //Store some metadata with the pushpin
        var pushpin = [];
        if (markersData[i]) {
            var loc = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(markersData[i].location_latitude, markersData[i].location_longitude));
            pushpin = loc;
            pushpin.metadata = {
                title: ""
            };
            pushpins[i] = loc;
        }
    }
    map.entities.push(pushpins);

}