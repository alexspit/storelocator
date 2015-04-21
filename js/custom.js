/*Theme    : assan
 * Author  : Design_mylife
 * Version : V1.2.1
 * 
 */



//sticky header on scroll
$(window).load(function() {
    $(".sticky").sticky({topSpacing: 0});
    
    
      $("#always").on('ifChecked', function(event){
            $("#monday_check").iCheck('check');
            $("#teusday_check").iCheck('check');
            $("#wednesday_check").iCheck('check');
            $("#thursday_check").iCheck('check');
            $("#friday_check").iCheck('check');
            $("#saturday_check").iCheck('check');
            $("#sunday_check").iCheck('check');
            
            $("#storeinfo_form input[type=time]").each(function(){
                           //$(this).val( "00:00:00" );   
                           $(this).prop('disabled', true);
                       });
                       
               $("#storeinfo_form button").each(function(){
                           
                           $(this).prop('disabled', true);
                       });
          });
          
      $("#always").on('ifUnchecked', function(event){
             $("#monday_check").iCheck('uncheck');
            $("#teusday_check").iCheck('uncheck');
            $("#wednesday_check").iCheck('uncheck');
            $("#thursday_check").iCheck('uncheck');
            $("#friday_check").iCheck('uncheck');
            $("#saturday_check").iCheck('uncheck');
            $("#sunday_check").iCheck('uncheck');
            
            $("#storeinfo_form input[type=time]").each(function(){
                             
                           $(this).prop('disabled', false);
                       });
                       
               $("#storeinfo_form button").each(function(){
                           
                           $(this).prop('disabled', false);
                       });
          });
    
    
  
        
                       
        $("#storeinfo_form button").each(function(e){
            $(this).click(function(e){
                e.preventDefault(); 
            });               
               
                       });
                       
                       
        
  $('#storeinfo_form input[type=checkbox]').each(function(){
    var self = $(this),
      label = self.next(),
      label_text = label.text();

    label.remove();
    self.iCheck({
      checkboxClass: 'icheckbox_line',
      insert: '<div class="icheck_line-icon"></div>' + label_text
    });
  });

                       
                     
});


//parallax
$(window).stellar({
    horizontalScrolling: false,
    responsive: true/*,
     scrollProperty: 'scroll',
     parallaxElements: false,
     horizontalScrolling: false,
     horizontalOffset: 0,
     verticalOffset: 0*/
});

//owl carousel for work
$(document).ready(function() {

    $("#work-carousel").owlCarousel({
        // Most important owl features
        items: 3,
        itemsCustom: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 3],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 6000
    });

});


//owl carousel for news
$(document).ready(function() {

    $("#news-carousel").owlCarousel({
        // Most important owl features
        items: 2,
        itemsCustom: false,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});



//owl carousel for testimonials
$(document).ready(function() {

    $("#testi-carousel").owlCarousel({
        // Most important owl features
        items: 1,
        itemsCustom: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});

/* ==============================================
 Counter Up
 =============================================== */
jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 100,
        time: 800
    });
});


/* ==============================================
 WOW plugin triggers animate.css on scroll
 =============================================== */

var wow = new WOW(
        {
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 100, // distance to the element when triggering the animation (default is 0)
            mobile: false        // trigger animations on mobile devices (true is default)
        }
);
wow.init();


//portfolio mix
$('#grid').mixitup();




//MAGNIFIC POPUP
$('.show-image').magnificPopup({type: 'image'});

/* ==============================================
 flex slider
 =============================================== */

$('.main-flex-slider').flexslider({
    slideshowSpeed: 5000,
    directionNav: false,
    animation: "fade"
});

//OWL CAROUSEL
$("#clients-slider").owlCarousel({
    autoPlay: 3000,
    pagination: false,
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [991, 2]
});


/*========tooltip and popovers====*/

$("[data-toggle=popover]").popover();

$("[data-toggle=tooltip]").tooltip();

/* ==============================================
mb.YTPlayer
=============================================== */

jQuery(function(){
			jQuery(".player").mb_YTPlayer();
		});


//transparent header

$(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.transparent-header').css("background", "#252525");
            } else {
                $('.transparent-header').css("background", "transparent");
            }
        });
        });

     
	var map;
        var marker;// Google map object
	
	// Initialize and display a google map
	$(function() {  
		// Create a Google coordinate object for where to initially center the map
		var latlng = new google.maps.LatLng( 35.937496, 14.375416 );	// Malta
		
		// Map options for how to display the Google map
		var mapOptions = { zoom: 11, center: latlng  };
		
		// Show the Google map in the div with the attribute id 'map-canvas'.
		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		// Update the Google map for the user's inputted address
		$("#country").change( function( event ) {
                    
			var geocoder = new google.maps.Geocoder();    // instantiate a geocoder object
			
			// Get the user's inputted address
			var address = $(this).val();
                        
                            
                        //var address = $(this).text();
			// Make asynchronous call to Google geocoding API
			geocoder.geocode( { 'address': address }, function(results, status) {
				var addr_type = results[0].types[0];	// type of address inputted that was geocoded
				if ( status == google.maps.GeocoderStatus.OK ) 
					ShowLocation( results[0].geometry.location, address, addr_type );
				else     
					alert("Geocode was not successful for the following reason: " + status);        
			});
		} );
        
                $("#city").blur( function( event ) {
                    event.preventDefault();
			var geocoder = new google.maps.Geocoder();    // instantiate a geocoder object
			var street = document.getElementById( "street" ).value;
                        var city = document.getElementById( "city" ).value;
                        
			// Get the user's inputted address
			var address = city+", "+country;
                        //var address = $(this).text();
			// Make asynchronous call to Google geocoding API
			geocoder.geocode( { 'address': address }, function(results, status) {
				var addr_type = results[0].types[0];	// type of address inputted that was geocoded
				if ( status == google.maps.GeocoderStatus.OK ) 
					ShowLocation( results[0].geometry.location, address, addr_type );
				else     
					alert("Geocode was not successful for the following reason: " + status);        
			});
		} );
                
                $("#street").blur( function( event ) {
                    event.preventDefault();
                    
			var geocoder = new google.maps.Geocoder();    // instantiate a geocoder object
			var street = document.getElementById( "street" ).value;
                        var city = document.getElementById( "city" ).value;
                        var country = $( "#country option:selected" ).text();
			// Get the user's inputted address
			var address = street+", "+city+", "+country;
 //var address = $(this).text();
			// Make asynchronous call to Google geocoding API
			geocoder.geocode( { 'address': address }, function(results, status) {
				var addr_type = results[0].types[0];	// type of address inputted that was geocoded
				if ( status == google.maps.GeocoderStatus.OK ) 
					ShowLocationWithMarker( results[0].geometry.location, address, addr_type );
				else     
					alert("Geocode was not successful for the following reason: " + status);        
			});
		} );
	} );
	
	// Show the location (address) on the map.
	function ShowLocation( latlng, address, addr_type )
	{
		// Center the map at the specified location
		map.setCenter( latlng );
		
		// Set the zoom level according to the address level of detail the user specified
		var zoom = 12;
		switch ( addr_type )
		{
		case "country"	: zoom = 11; break;		// user specified a state
		case "locality"						: zoom = 14; break;		// user specified a city/town
		case "street_address"				: zoom = 15; break;
                case "route"				: zoom = 17; break;// user specified a street address
		}
		map.setZoom( zoom );
	
	}
        
        
        function ShowLocationWithMarker( latlng, address, addr_type )
	{
          
		// Center the map at the specified location
		map.setCenter( latlng );
		
		// Set the zoom level according to the address level of detail the user specified
		var zoom = 12;
		switch ( addr_type )
		{
		case "country"	: zoom = 11; break;		// user specified a state
		case "locality"						: zoom = 13; break;		// user specified a city/town
		case "street_address"				: zoom = 15; break;
                case "route"				: zoom = 15; break;// user specified a street address
		}
		map.setZoom( zoom );
		
		// Place a Google Marker at the same location as the map center 
		// When you hover over the marker, it will display the title
                
		marker = new google.maps.Marker( { 
			position: latlng,     
			map: map, 
                        draggable:true,
                        animation: google.maps.Animation.DROP,     
			title: address
		});
                
           
		// Create an InfoWindow for the marker
		var contentString = "<b>" + address + "</b>";	// HTML text to display in the InfoWindow
		var infowindow = new google.maps.InfoWindow( { content: contentString } );
		
		// Set event to display the InfoWindow anchored to the marker when the marker is clicked.
		google.maps.event.addListener( marker, 'click', function() { infowindow.open( map, marker ); });
                
                google.maps.event.addListener(marker, 'dragend', function(evt){
               // document.getElementById('current').innerHTML = '<p>Latitude: ' + evt.latLng.lat().toFixed(3) + ' Longitude: ' + evt.latLng.lng().toFixed(3) + '</p>';
                $("#lat").val(evt.latLng.lat());
                $("#lng").val(evt.latLng.lng());
                
                $("#full_lat").val(evt.latLng.lat());
                $("#full_lng").val(evt.latLng.lng());
                });

                google.maps.event.addListener(marker, 'drag', function(evt){
                $("#lat").val(evt.latLng.lat());
                $("#lng").val(evt.latLng.lng());
                });
                google.maps.event.addListener(marker, 'dragstart', function(evt){
               // document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
                });
                
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();
                
                $("#lat").val(lat);
                $("#lng").val(lng);
                
                

	}
        
        

	
            
            
       
        
