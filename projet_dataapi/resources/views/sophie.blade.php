
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/sophie.css">
 
   
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">



                <div class="title m-b-md">
                    Laravel
                <h3>My Google Maps Demo</h3>
    <div id="map"></div>
        <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: new google.maps.LatLng({{$titis[0]->properties->latlon[0]}}, {{$titis[0]->properties->latlon[1]}}),
          mapTypeId: 'roadmap'
        });
        var customLabel = {
        musee: {
          label: 'R'
        }
      };
        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          
          library: {
            icon: iconBase + 'library_maps.png'
          },
          info: {
            icon: iconBase + 'info-i_maps.png'
          }
        };

        var features = [

        @foreach ($titis as $titi)
          {position: new google.maps.LatLng({{$titi->properties->latlon[0]}}, {{$titi->properties->latlon[1]}}),
            type: 'info'},
        @endforeach 
        ];

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTiDU0xPHlhlk4vHTPUnehaj_uX2W5FSo&callback=initMap">
    </script>
                    
                </div>
            </div>
        </div>
    </body>
</html>
