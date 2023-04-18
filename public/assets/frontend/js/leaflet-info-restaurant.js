
var mymap = L.map('mapid').setView([25.206426, 55.319011], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox.streets'
}).addTo(mymap);

var popup = L.popup();

var markersData = {
    'Restaurant': [
        {
            name: 'italian restro',
            location_latitude: 25.206426,
            location_longitude: 55.346465,
            map_image_url: '../assets/images/restaurant/environment/1.jpg',
            name_point: 'italian restro',
            price: '$1200',
            title: 'first',
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
            title: 'second',
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
            title: 'third',
            rating: 'five-star',
            url_point: 'restaurant-single-2.html'
        },
        {
            name: 'Go Maxican',
            location_latitude: 25.229721,
            location_longitude: 55.328229,
            map_image_url: '../assets/images/restaurant/environment/4.jpg',
            name_point: 'Go Maxican',
            price: '$1200',
            title: 'four',
            rating: 'two-star',
            url_point: 'restaurant-single-2.html'
        }
    ]
};

for (var key in markersData)
    markersData[key].forEach(function (item) {
        L.marker([item.location_latitude, item.location_longitude], {title: item.title}).addTo(mymap)
            .bindPopup(
                '<div class="infoBox">' +
                '<div class="marker-detail">' +
                '<img src="' + item.map_image_url + '" alt="Image"/>' +
                '<div class="detail-part">' +
                '<h6>'+ item.name_point +'</h6>' +
                '<div class="rating ' + item.rating + '">' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '</div>' +
                '<span>'+ item.price +'</span>' +
                '<a href="'+ item.url_point + '">Details</a>' +
                '</div>' +
                '</div>' +
                '</div>');


                $('.product-wrapper-grid .special-box').mouseenter(function () {
                    var className = $(this).attr('data-class');
                    $(".leaflet-marker-pane img[title|=" + className + "]").each(function (index) {
                        var marker_title = $(this).attr('title');
                        if (marker_title === className) {
                            $(this).addClass('add-filter');
                        }
                    });
                });
        
                $('.product-wrapper-grid .special-box').mouseleave(function () {
                    var className = $(this).attr('data-class');
                    $(".leaflet-marker-pane img[title|=" + className + "]").each(function (index) {
                        var marker_title = $(this).attr('title');
                        if (marker_title === className) {
                            $(this).removeClass('add-filter');
                        }
                    });
                });

                 // map modal
            $('.sidebar-hotels .hotel-box').mouseenter(function () {
                var className = $(this).attr('data-class');
                console.log(className);
                $(".leaflet-marker-pane img[title|=" + className + "]").each(function (index) {
                    var marker_title = $(this).attr('title');
                    if (marker_title === className) {
                        $(this).addClass('add-filter');
                    }
                });
            });
    
            $('.sidebar-hotels .hotel-box').mouseleave(function () {
                var className = $(this).attr('data-class');
                $(".leaflet-marker-pane img[title|=" + className + "]").each(function (index) {
                    var marker_title = $(this).attr('title');
                    if (marker_title === className) {
                        $(this).removeClass('add-filter');
                    }
                });
            });

             // listing hotel
             $('.list-view .list-box').mouseenter(function () {
                var className = $(this).attr('data-class');
                console.log(className);
                $(".leaflet-marker-pane img[title|=" + className + "]").each(function (index) {
                    var marker_title = $(this).attr('title');
                    if (marker_title === className) {
                        $(this).addClass('add-filter');
                    }
                });
            });
    
            $('.list-view .list-box').mouseleave(function () {
                var className = $(this).attr('data-class');
                $(".leaflet-marker-pane img[title|=" + className + "]").each(function (index) {
                    var marker_title = $(this).attr('title');
                    if (marker_title === className) {
                        $(this).removeClass('add-filter');
                    }
                });
            });
    });

