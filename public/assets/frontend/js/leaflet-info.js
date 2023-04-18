
var mymap = L.map('mapid').setView([25.206426, 55.319011], 13);


L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox.streets',
}).addTo(mymap);

var popup = L.popup();

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
            title: 'first',
            url_point: 'hotel-single-7.html'
        },
        {
            name: 'Rose Temple',
            location_latitude: 25.222578,
            location_longitude: 55.319011,
            map_image_url: '../assets/images/hotel/video-image.jpg',
            name_point: 'Rose Temple',
            price: '$1200',
            rating: 'three-star',
            title: 'second',
            url_point: 'hotel-single-7.html'
        },
        {
            name: 'Isle Resort',
            location_latitude: 25.209843,
            location_longitude: 55.293616,
            map_image_url: '../assets/images/hotel/room/3.jpg',
            name_point: 'Isle Resort',
            price: '$1200',
            rating: 'five-star',
            title: 'third',
            url_point: 'hotel-single-7.html'
        },
        {
            name: 'Hotel Mansion',
            location_latitude: 25.229721,
            location_longitude: 55.328229,
            map_image_url: '../assets/images/hotel/gallery/3.jpg',
            name_point: 'Hotel Mansion',
            price: '$1200',
            rating: 'two-star',
            title: 'four',
            url_point: 'hotel-single-7.html'
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



