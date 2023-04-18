
function addMarkerToGroup(group, coordinate, html) {
    var marker = new H.map.Marker(coordinate, { icon: icon });
    // add custom data to the marker
    marker.setData(html);
    group.addObject(marker);
}


var yourMarker  = '../assets/images/icon/marker-b.png';
var icon = new H.map.Icon(yourMarker);


var markersData = {
    'Hotels': [
        {
            name: 'sea view',
            location_latitude: 25.206426,
            location_longitude: 55.346465,
            map_image_url: '../assets/images/hotel/gallery/1.jpg',
            name_point: 'sea view',
            price: '$1200',
            rating: 'four-star',
            url_point: 'hotel-single-7.html'
        },
        {
            name: 'Rose Temple',
            location_latitude: 25.222578,
            location_longitude: 55.319011,
            map_image_url: '../assets/images/hotel/gallery/2.jpg',
            name_point: 'Rose Temple',
            price: '$1200',
            rating: 'three-star',
            url_point: 'hotel-single-7.html'
        },
        {
            name: 'Isle Resort',
            location_latitude: 25.209843,
            location_longitude: 55.293616,
            map_image_url: '../assets/images/hotel/gallery/3.jpg',
            name_point: 'Isle Resort',
            price: '$1200',
            rating: 'five-star',
            url_point: 'hotel-single-7.html'
        },
        {
            name: 'Hotel Mansion',
            location_latitude: 25.229721,
            location_longitude: 55.338229,
            map_image_url: '../assets/images/hotel/gallery/4.jpg',
            name_point: 'Hotel Mansion',
            price: '$1200',
            rating: 'two-star',
            url_point: 'hotel-single-7.html'
        }
    ]
};


function addInfoBubble(map) {
    var group = new H.map.Group();
    map.addObject(group);
    group.addEventListener('tap', function (evt) {
        var bubble =  new H.ui.InfoBubble(evt.target.getGeometry(), {
            content: evt.target.getData()
        });
        // show info bubble
        ui.addBubble(bubble);
    }, false);

    window.addEventListener('resize', () => map.getViewPort().resize());

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




var platform = new H.service.Platform({
    'apikey': 'ElOm77yzgasZvSGlnpiqwE-D5sbtTwgMYzSFiBV-6pc'
});
var defaultLayers = platform.createDefaultLayers();

var map = new H.Map(document.getElementById('map'),
    defaultLayers.vector.normal.map,{
        center: {lat: 25.206426, lng: 55.319011},
        zoom: 14,
        pixelRatio: window.devicePixelRatio || 1
    });




var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

var ui = H.ui.UI.createDefault(map, defaultLayers);

addInfoBubble(map);
























