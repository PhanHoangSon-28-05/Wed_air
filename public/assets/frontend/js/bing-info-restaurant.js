function loadMapScenario() {
    var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
        center: new Microsoft.Maps.Location(25.206426, 55.306465),
        zoom: 13
    });
    var pushpins = Microsoft.Maps.TestDataGenerator.getPushpins(4, map.getBounds(),
        {
            icon: 'https://www.bingmapsportal.com/Content/images/poi_custom.png',
        }
    );
    var infobox = new Microsoft.Maps.Infobox(pushpins[0].getLocation(), { visible: false, autoAlignment: true });
    markersData = [
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
    ];
    infobox.setMap(map);
    for (var i = 0; i < pushpins.length; i++) {

        //Store some metadata with the pushpin
        var pushpin = [];
        var htmldata = "";
        if(markersData[i]) {
            htmldata = '<div class="infoBox">' +
                '<div class="marker-detail">' +
                '<img src="' + markersData[i].map_image_url + '" alt="Image"/>' +
                '<div class="detail-part">' +
                '<h6>' + markersData[i].name_point + '</h6>' +
                '<div class="rating ' + markersData[i].rating + '">' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '</div>' +
                '<span>' + markersData[i].price + '</span>' +
                '<a href="' + markersData[i].url_point + '">Details</a>' +
                '</div>' +
                '</div>' +
                '</div>';
            var loc = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(markersData[i].location_latitude, markersData[i].location_longitude));
            pushpin = loc;
            pushpin.metadata = {
                title: "",
                description: htmldata
            };
            pushpins[i] = loc;
            Microsoft.Maps.Events.addHandler(pushpin, 'click', function (args) {
                infobox.setOptions({
                    location: args.target.getLocation(),
                    title: args.target.metadata.title,
                    description: args.target.metadata.description,
                    visible: true
                });
            });
        }
    }
    map.entities.push(pushpins);

}
