function addMarkerToGroup(group, coordinate, html) {
    var marker = new H.map.Marker(coordinate, { icon: icon });
    // add custom data to the marker
    marker.setData(html);
    group.addObject(marker);
}


var yourMarker  = '../assets/images/icon/food-marker.png';
var icon = new H.map.Icon(yourMarker);

var markersData = {
    'Restaurant': [
        {
            name: 'italian restro',
            location_latitude: 25.206426,
            location_longitude: 55.346465,
            map_image_url: '../assets/images/restaurant/environment/1.jpg',
            name_point: 'italian restro',
            price: '$1200',
            rating: 'four-star',
            url_point: 'restaurant-single-2.html'
        },
        {
            name: 'pizza mania',
            location_latitude: 25.222578,
            location_longitude: 55.319011,
            map_image_url: '../assets/images/restaurant/environment/2.jpg',
            name_point: 'pizza mania',
            price: '$1200',
            rating: 'three-star',
            url_point: 'restaurant-single-2.html'
        },
        {
            name: 'The Cafe',
            location_latitude: 25.209843,
            location_longitude: 55.293616,
            map_image_url: '../assets/images/restaurant/environment/3.jpg',
            name_point: 'The Cafe',
            price: '$1200',
            rating: 'five-star',
            url_point: 'restaurant-single-2.html'
        },
        {
            name: 'Go Maxican',
            location_latitude: 25.229721,
            location_longitude: 55.338229,
            map_image_url: '../assets/images/restaurant/environment/4.jpg',
            name_point: 'Go Maxican',
            price: '$1200',
            rating: 'two-star',
            url_point: 'restaurant-single-2.html'
        }
    ]
};


function addInfoBubble(map) {
    var group = new H.map.Group();

    map.addObject(group);

    // add 'tap' event listener, that opens info bubble, to the group
    group.addEventListener('tap', function (evt) {
        // event target is the marker itself, group is a parent event target
        // for all objects that it contains
        var bubble =  new H.ui.InfoBubble(evt.target.getGeometry(), {
            // read custom data
            content: evt.target.getData()
        });
        // show info bubble
        ui.addBubble(bubble);
    }, false);

    for (var key in markersData)
        markersData[key].forEach(function (item) {
            addMarkerToGroup(group, {lat: item.location_latitude, lng: item.location_longitude},
                '<div class="infoBox">' +
                '<div class="marker-detail">' +
                '<img src="' + item.map_image_url + '" alt="Image"/>' +
                '<div class="detail-part">' +
                '<h6>' + item.name_point + '</h6>' +
                '<div class="rating ' + item.rating + '">' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '</div>' +
                '<span>' + item.price + '</span>' +
                '<a href="' + item.url_point + '">Details</a>' +
                '</div>' +
                '</div>' +
                '</div>');
        })


}

/**
 * Boilerplate map initialization code starts below:
 */

// initialize communication with the platform
// In your own code, replace variable window.apikey with your own apikey
var platform = new H.service.Platform({
    'apikey': 'ElOm77yzgasZvSGlnpiqwE-D5sbtTwgMYzSFiBV-6pc'
});
var defaultLayers = platform.createDefaultLayers();

// initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
    defaultLayers.vector.normal.map,{
        center: {lat: 25.206426, lng: 55.319011},
        zoom: 14,
        pixelRatio: window.devicePixelRatio || 1
    });
// add a resize listener to make sure that the map occupies the whole container
window.addEventListener('resize', () => map.getViewPort().resize());

// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// create default UI with layers provided by the platform
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
addInfoBubble(map);
