(function ($) {
    "use strict";
    var markerIcon = {
        anchor: new google.maps.Point(22, 16),
        url: 'images/map-marker.png',
    }

    function MainFullMap() {
        function locationData(locationURL, locationCategory, locationImg, locationTitle, locationAddress, locationPhone, locationStarRating, locationRevievsCounter) {
            return ('<div class="map-popup-box"><div class="map-popup"><div class="close-infobox"><i class="fa fa-times"></i></div><div class="mp-category">' + locationCategory + '</div><a href="' + locationURL + '" class="mp-img-box fl-wrap"><img src="' + locationImg + '" alt=""></a> <div class="mp-list-content fl-wrap"><div class="mp-card-ratting mp-ratting" data-staRrating="' + locationStarRating + '"><span class="mp-review-count">( ' + locationRevievsCounter + ' reviews )</span></div><div class="mpl-title fl-wrap"><h4><a href=' + locationURL + '>' + locationTitle + '</a></h4><span class="mp-location-info"><i class="fa fa-map-marker"></i>' + locationAddress + '</span><span class="mp-store-call"><i class="fa fa-phone"></i>' + locationPhone + '</span></div></div></div></div>')
        }
        var locations = [
            [locationData(
                'listing-details.html',
                'Food and Drink',
                'images/img.html',
                'Luxury Restourant',
                "801 West" + " Georgia, Canada ",
                "+52697548348",
                "5",
                "27"
            ),
                49.283650,
                -123.118850,
                0,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Conference and Events',
                'images/img1.jpg',
                'Event In City Mol',
                "1038 Canada Place Way, Canada ",
                "+52697548348",
                "4",
                "5"
            ),
                49.287840,
                -123.114440,
                1, markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Bear Bar',
                'images/img1.jpg',
                'Luxury Bear Bar',
                "181 Wellington" + " Street West, M5V 3G7 Toronto",
                "+52697548348",
                "4",
                "5"
            ),
                43.645490,
                -79.387020,
                2,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Food and Drink',
                'images/img2.jpg',
                'Luxury Restourant',
                "Montreal, QC H3B 2Y3, Canada ",
                "+52697548348",
                "5",
                "27"
            ),
                45.500790,
                -73.571020,
                0,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Gym - Fitness',
                'images/img3.jpg',
                'Gym in the Center',
                "100" + " Richmond St W, Toronto, Canada",
                "+52697548348",
                "4",
                "11"
            ),
                43.650750,
                -79.383980,
                10,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Shop - Store',
                'images/img4.jpg',
                'Shop in Boutique Zone',
                "34-42" + " Montgomery St, New York",
                "+52697548348",
                "5",
                "43"
            ),
                40.94982541,
                -73.84357452,
                4,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Hotels',
                'images/img5.jpg',
                'Luxary Hotel',
                "#370, Calgary, AB" + " T2P" + " 3H7, Canada",
                "+52697548348",
                "4",
                "7"
            ),
                51.047750,
                -114.067190,
                5,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Shop - Store',
                'images/img6.jpg',
                'Shop In City Mol',
                "4050" + " Whistler Way, BC V0N 1B4, Canada ",
                "+52697548348",
                "3",
                "4"
            ),
                50.113140,
                -122.956510,
                6, markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Bear Bar',
                'images/img7.jpg',
                'Luxury Bear Bar',
                "2545 Montreal," + " QC H2K 2H5, Canada",
                "+52697548348",
                "4",
                "11"
            ),
                45.634670,
                -73.505790,
                10,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Hotels',
                'images/img8.jpg',
                'Luxary Hotel-Spa',
                "211 Bear St," + " Banff, AB T1L 1A1, Canada",
                "+52697548348",
                "5",
                "12"
            ),
                51.177340,
                -115.572730,
                8,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Conference and Events',
                'images/img1.jpg',
                'Web Design Event ',
                "130 King, Toronto, ON M5X 1K6, Canada",
                "+52697548348",
                "5",
                "17"
            ),
                43.648430,
                -79.383190,
                9,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Gym - Fitness',
                'images/img9.jpg',
                'Gym in the Center',
                "4820" + " Edmonton, AB T6B 0A5, Canada",
                "+52697548348",
                "4",
                "11"
            ),
                53.513280,
                -113.416010,
                10,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Shop - Store',
                'images/img10.jpg',
                'Shop In City Mol',
                "34-42" + " Montgomery St, New York",
                "+52697548348",
                "3",
                "4"
            ),
                45.489010,
                -73.636360,
                6,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Conference and Events',
                'images/img1.jpg',
                'Web Design Event ',
                "34-42" + " Montgomery St, New York",
                "+52697548348",
                "5",
                "17"
            ),
                43.653280,
                -79.374300,
                9,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Restaurants',
                'images/img11.jpg',
                'Hotel & Restaurants',
                "34-42" + " Montgomery St, New York",
                "+52697548348",
                "4",
                "11"
            ),
                47.566640,
                -52.703970,
                10,
                markerIcon
            ],
            [locationData(
                'listing-details.html',
                'Hotels',
                'images/img12.jpg',
                'Fancy Hotel',
                "34-42" + " Montgomery St, New York",
                "+52697548348",
                "5",
                "3"
            ),
                46.420900,
                -63.811310,
                7,
                markerIcon
            ],
        ];

        var map = new google.maps.Map(document.getElementById('main-full-map'), {
            zoom:4,
            scrollwheel: false,
            center: new google.maps.LatLng(40.728157, -74.077644),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: false,
            panControl: false,
            fullscreenControl: true,
            navigationControl: false,
            streetViewControl: false,
            animation: google.maps.Animation.BOUNCE,
            gestureHandling: 'cooperative',
            styles: [
                {
                    "featureType" : "road",
                    "stylers" : [
                        {"color" : "#ffffff"}
                    ]
                }, {
                    "featureType" : "water",
                    "stylers" : [
                        {"color" : "#e9e9e9"}
                    ]
                }, {
                    "featureType" : "landscape",
                    "stylers" : [
                        {"color" : "#f5f5f5"}
                    ]
                }, {
                    "elementType" : "labels.text.fill",
                    "stylers" : [
                        {"color" : "transparent"}
                    ]
                }, {
                    "featureType" : "poi",
                    "stylers" : [
                        {"color" : "#fefefe"}
                    ]
                }, {
                    "elementType" : "labels.text",
                    "stylers" : [
                        {"saturation" : 1},
                        {"weight" : 0.1},
                        {"color" : "#737980"}
                    ]
                }
            ]
        });


        var boxText = document.createElement("div");
        boxText.className = 'map-box';
        var currentInfobox;
        var boxOptions = {
            content: boxText,
            disableAutoPan: true,
            alignBottom: true,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(-145, -45),
            zIndex: null,
            boxStyle: {
                width: "260px"
            },
            closeBoxMargin: "0",
            closeBoxURL: "",
            infoBoxClearance: new google.maps.Size(1, 1),
            isHidden: false,
            pane: "floatPane",
            enableEventPropagation: false,
        };
        var markerCluster, marker, i;
        var allMarkers = [];
        var clusterStyles = [{
            textColor: 'white',
            url: '',
            height: 50,
            width: 50
        }];


        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                icon: locations[i][4],
                id: i
            });
            allMarkers.push(marker);
            var ib = new InfoBox();
            google.maps.event.addListener(ib, "domready", function () {
                cardRaining()
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    ib.setOptions(boxOptions);
                    boxText.innerHTML = locations[i][0];
                    ib.close();
                    ib.open(map, marker);
                    currentInfobox = marker.id;
                    var latLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
                    map.panTo(latLng);
                    map.panBy(0, -180);
                    google.maps.event.addListener(ib, 'domready', function () {
                        $('.close-infobox').click(function (e) {
                            e.preventDefault();
                            ib.close();
                        });
                    });
                }
            })(marker, i));
        }
        var options = {
            imagePath: '../images/',
            styles: clusterStyles,
            minClusterSize: 2
        };
        markerCluster = new MarkerClusterer(map, allMarkers, options);
        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });

        $('.nextmap-nav').click(function (e) {
            e.preventDefault();
            map.setZoom(15);
            var index = currentInfobox;
            if (index + 1 < allMarkers.length) {
                google.maps.event.trigger(allMarkers[index + 1], 'click');
            } else {
                google.maps.event.trigger(allMarkers[0], 'click');
            }
        });
        $('.prevmap-nav').click(function (e) {
            e.preventDefault();
            map.setZoom(15);
            if (typeof (currentInfobox) == "undefined") {
                google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
            } else {
                var index = currentInfobox;
                if (index - 1 < 0) {
                    google.maps.event.trigger(allMarkers[allMarkers.length - 1], 'click');
                } else {
                    google.maps.event.trigger(allMarkers[index - 1], 'click');
                }
            }
        });
        $('.map-item').click(function (e) {
            e.preventDefault();
            map.setZoom(15);
            var index = currentInfobox;
            var marker_index = parseInt($(this).attr('href').split('#')[1], 10);
            google.maps.event.trigger(allMarkers[marker_index], "click");
            if ($(this).hasClass("scroll-top-map")){
                $('html, body').animate({
                    scrollTop: $(".map-container").offset().top+ "-80px"
                }, 500)
            }
            else if ($(window).width()<1064){
                $('html, body').animate({
                    scrollTop: $(".map-container").offset().top+ "-80px"
                }, 500)
            }
        });
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, map);

        function ZoomControl(controlDiv, map) {
            zoomControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            controlDiv.style.padding = '5px';
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "mapzoom-in";
            controlWrapper.appendChild(zoomInButton);
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "mapzoom-out";
            controlWrapper.appendChild(zoomOutButton);
            google.maps.event.addDomListener(zoomInButton, 'click', function () {
                map.setZoom(map.getZoom() + 1);
            });
            google.maps.event.addDomListener(zoomOutButton, 'click', function () {
                map.setZoom(map.getZoom() - 1);
            });
        }


    }
    var map = document.getElementById('main-full-map');
    if (typeof (map) != 'undefined' && map != null) {
        google.maps.event.addDomListener(window, 'load', MainFullMap);
    }

    function singleMap() {
        var myLatLng = {
            lng: $('#singleMap').data('longitude'),
            lat: $('#singleMap').data('latitude'),
        };
        var single_map = new google.maps.Map(document.getElementById('singleMap'), {
            zoom: 10,
            center: myLatLng,
            scrollwheel: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            panControl: false,
            navigationControl: false,
            streetViewControl: false,
            styles: [{
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                    "color": "#f2f2f2"
                }]
            }]
        });
        var markerIcon2 = {
            url: '../images/map-marker.png',
        }
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: single_map,
            icon: markerIcon2,
            title: 'Our Location'
        });
        var zoomControlDiv = document.createElement('div');
        var zoomControl = new ZoomControl(zoomControlDiv, single_map);

        function ZoomControl(controlDiv, single_map) {
            zoomControlDiv.index = 1;
            single_map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            controlDiv.style.padding = '5px';
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "mapzoom-in";
            controlWrapper.appendChild(zoomInButton);
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "mapzoom-out";
            controlWrapper.appendChild(zoomOutButton);
            google.maps.event.addDomListener(zoomInButton, 'click', function () {
                single_map.setZoom(single_map.getZoom() + 1);
            });
            google.maps.event.addDomListener(zoomOutButton, 'click', function () {
                single_map.setZoom(single_map.getZoom() - 1);
            });
        }
    }
    var single_map = document.getElementById('singleMap');
    if (typeof (single_map) != 'undefined' && single_map != null) {
        google.maps.event.addDomListener(window, 'load', singleMap);
    }
})(this.jQuery);