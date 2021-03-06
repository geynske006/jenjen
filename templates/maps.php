

        
        <!-- 
            You need to include this script on any page that has a Google Map.
            When using Google Maps on your own site you MUST signup for your own API key at:
                https://developers.google.com/maps/documentation/javascript/tutorial#api_key
            After your sign up replace the key in the URL below or paste in the new script tag that Google provides.
        -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 18,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(50.859573, 4.513855), // New York

                    // 50.859573, 4.513855

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [	{featureType:"administrative",elementType:"all",stylers:[{visibility:"on"},{saturation:-100},{lightness:20}]},
                    			{featureType:"road",elementType:"all",stylers:[{visibility:"on"},{saturation:-100},{lightness:40}]},	
                    			{featureType:"water",elementType:"all",stylers:[{visibility:"on"},{saturation:-10},{lightness:30}]},	
                    			{featureType:"landscape.man_made",elementType:"all",stylers:[{visibility:"simplified"},{saturation:-60},{lightness:10}]},	
                    			{featureType:"landscape.natural",elementType:"all",stylers:[{visibility:"simplified"},{saturation:-60},{lightness:60}]},	
                    			{featureType:"poi",elementType:"all",stylers:[{visibility:"off"},{saturation:-100},{lightness:60}]},	
                    			{featureType:"transit",elementType:"all",stylers:[{visibility:"off"},{saturation:-100},{lightness:60}]}
                    ]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
            }
        </script>
        <!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
        <div id="map"></div>
