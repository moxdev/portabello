function initialize() {
	// MAKE SURE WE ARE SEEING SOME DATA FROM THE PHP ARRAYS THAT ARE PASSED TO JS ARRAYS
	// console.log('Categories: ' + categories);
	//console.log('Locations: ' + locations[10]);
	
	var center = new google.maps.LatLng(38.976367, -77.019022);
	// SET UP A STYLE SET FOR EACH MAP TYPE
	var mvStyles = [
		{
			"stylers": [
				{ "hue": "#D2AF1F" },
				{ "saturation": -75 }
	    	]
		}, {
			featureType: "poi",
			elementType: "labels",
			stylers: [
			  { visibility: "off" }
			]
		  }, {
			featureType: "transit.station",
			stylers: [
			  { visibility: "off" }
			]
		  }
	];

	// ADD NAMES FOR OUR CUSTOM MAP TYPE CONTROLS
	var mvMap = new google.maps.StyledMapType(mvStyles, {
		name: 'Metro Village'
	});
	
	// WE'LL NEED THIS IN A BIT
	var markers = [];
	
	directionsDisplay = new google.maps.DirectionsRenderer();
	
	// SET OUR MAP OPTIONS
	var myOptions = {
		zoom:16,
		zoomControlOptions: {
			/*style: google.maps.ZoomControlStyle.SMALL,*/
			position: google.maps.ControlPosition.LEFT_BOTTOM
		},
		center: center,
		
		/********** ADD AND REMOVE SOME DEFAULT MAP CONTROLS **********/
		//zoomControl: false,
		mapTypeControl: false,
		scrollwheel: false,
		panControl:false,
		rotateControl:false,
		streetViewControl:false,
		
	// ADD ALL OF THE MAP TYPES THAT WE WANT TO USE IN OUR MAP
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.TERRAIN, google.maps.MapTypeId.SATELLITE, 'mvStyles']
		}, mapTypeId: google.maps.MapTypeId.ROADMAP	
	};
	
	// LOAD THE MAP
	var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);
	directionsDisplay.setMap(map);
	var oms = new OverlappingMarkerSpiderfier(map);

	// ADD CUSTOM MAP TYPES TO MAP CONTROLS
	map.mapTypes.set('mvStyles', mvMap);
	map.setMapTypeId('mvStyles');

	
	var bounds = new google.maps.LatLngBounds();
	
	// LOOP THROUGH OUR LOCATIONS ARRAY AND ADD EACH MARKER TO THE "MARKERS" ARRAY CREATED ABOVE
	var infowindow = new google.maps.InfoWindow();
	var marker, i;
	/*var shadow = new google.maps.MarkerImage('imgs/map/shadow.png',
		new google.maps.Size(66, 51),
		new google.maps.Point(0,0),
		new google.maps.Point(20, 49)
	);*/

	// ADD OUR STATIC PROPERTY MARKER
    var image = {
		url: '/wp-content/themes/metro-village-apartments/imgs/icon-map-main.png'
	}
    var markerMV = new google.maps.Marker({
    	position: new google.maps.LatLng(38.976367, -77.019022),
		map: map,
		icon:image,
		zIndex: 1000
   });
   
   // Define the LatLng coordinates for the polygon's path.
   var coords = [
   		new google.maps.LatLng(38.976379, -77.019307),
		new google.maps.LatLng(38.975724, -77.018353),
		new google.maps.LatLng(38.975802, -77.018212),
		new google.maps.LatLng(38.976917, -77.018857),
		new google.maps.LatLng(38.976379, -77.019307)
  	];
	
	// Construct the polygon.
	/*apt = new google.maps.Polygon({
    	paths: coords,
    	strokeColor: '#E84B37',
    	strokeOpacity: 0.8,
    	strokeWeight: 1,
    	fillColor: '#E84B37',
    	fillOpacity: 0.35
  	});
	
	apt.setMap(map);
	
	var mainInfoWindow = new google.maps.InfoWindow();
	var contentString = '<strong>Metro Village Apartments</strong>';
    mainInfoWindow.setContent(contentString);
    mainInfoWindow.setPosition({lat:38.976367, lng:-77.019022});
	mainInfoWindow.open(map); 
	
	google.maps.event.addListener(apt, 'click', function(event) {
    	mainInfoWindow.open(map);
  });*/

	// ADD ALL THE MARKERS IN OUR LOCATIONS ARRAY
	for (i=0; i<locations.length; i++) {
		var image = '/wp-content/themes/metro-village-apartments/imgs/icon-map-' + locations[i][8] + '.png';
		var url = locations[i][6];
		if(url != '') {
			url = '<a target="_blank" href="' + locations[i][6] + '">Visit Website &raquo;</a>';
		} else {
			url = '';
		}
		var details = locations[i][7];
		if(details != '') {
			details= '<br><br><p>' +  locations[i][7] + '</p>';
			var windowClass="no-scroll-fix";
		} else {
			details = '';
			var windowClass = 'scroll-fix';
		}

		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
			icon: image,
			//visible:false,
			//shadow:shadow,
			//title: locations[i][0],
			html: '<div class="' + windowClass + '"><strong class="heading">' + locations[i][0] + '</strong><br />' + locations[i][3] + '<br />' + locations[i][4] + '<br />' + locations[i][5] + '<br />' + url + details + '</div>'
		});
		oms.addMarker(marker);
		markers.push(marker);
		
		// YOU WILL NEED THIS IF YOU DON'T WANT TO USE THE SPIDER MARKERS
		/*google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(this.html);
				infowindow.open(map, marker);
			}
		})(marker, i));*/
		oms.addListener('click', function(marker) {
		  infowindow.setContent(marker.html);
		  //homeInfoWindow.close();
		  infowindow.open(map, marker);
		  //mainInfoWindow.close(map);
		});
		
		//bounds.extend(marker.getPosition());
    }

    // map.fitBounds(bounds);
	
	// SHOW THE RESET BUTTON IF THE MAP CENTER CHANGES
	/*map.addListener('center_changed', function() {
		jQuery('#reset').fadeIn('fast');
	});*/

    // CONTROLS
	jQuery('.toggle').click(function() {
		var cat = jQuery(this).parent().attr('id');
		//console.log(cat);
		for (var i=0; i<locations.length; i++) {
			if (locations[i][8] == cat) {
				markers[i].setVisible(true);
				markers[i].setOptions({zIndex:1100});
			} else if (locations[i][8] != cat) {
				markers[i].setVisible(false);
			}
		}
		infowindow.close();
		//jQuery('.community-listing-wrapper').css('display', 'none');
		//jQuery('.community-listing-wrapper.' + cat).css('display', 'block');
		//jQuery('main article').css('display', 'none');
		jQuery('.toggle').addClass('toggled').removeClass('active');
		jQuery(this).removeClass('toggled').addClass('active');	
		
		jQuery('#reset').fadeIn('fast');
		
		return false;
	});

	
	// RESET THE MAP TO THE INITIAL STATE	
	jQuery("#reset").click(function() {
		infowindow.close();
		//mainInfoWindow.open(map); 
		//map.fitBounds(bounds);
		map.setCenter(center);
		map.setZoom(16);
		directionsDisplay.setMap(map);
		for (var i=0; i<locations.length; i++) {
			markers[i].setVisible(true);
		}
		jQuery('.toggle').removeClass('active');
		jQuery('.toggle').removeClass('toggled');
		jQuery(this).fadeOut('fast');
		return false;
	});
	
}

// BUILD THE NAV THAT WILL TOGGLE THE MARKERS BASED ON THE CATEGORIES ARRAY
var mapNav = jQuery("<nav>", {id: "map-nav"});
jQuery('#map-canvas').after(mapNav);
jQuery('#map-nav').append('<ul>');

for (i=0; i<categories.length; i++) {
	var catList = jQuery("<li>", {id: categories[i][1], html: '<a class="toggle"><span class="icon"></span> <span class="cat-name">' + categories[i][0] + '</span>' + '<span class="cat-description">' + categories[i][2] + '<span></a>'});
	jQuery('#map-nav ul').append(catList);
}

jQuery(window).load(function() {
	initialize();
});
/*jQuery(window).resize(function() {
	initialize();
	jQuery('.toggle').removeClass('toggled');
	jQuery('.toggle').removeClass('active');
});*/