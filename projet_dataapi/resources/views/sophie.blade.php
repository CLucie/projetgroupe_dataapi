
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
          center: new google.maps.LatLng({{$cartes[0]->properties->latlon[0]}}, {{$cartes[0]->properties->latlon[1]}}),
          mapTypeId: 'roadmap'
        });

        var contentString = '<div id="content">'+
                '<div>'+
                '</div>'+
                '<h1></h1>'+
                '<div>'+
                '<p><b></b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                'sandstone rock formation in the southern part of the '+
                'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
                'south west of the nearest large town, Alice Springs; 450&#160;km '+
                '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
                        'features of the Uluru - Kata Tjuta National Park. Uluru is '+
                'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
                'Aboriginal people of the area. It has many springs, waterholes, '+
                'rock caves and ancient paintings. Uluru is listed as a World '+
                'Heritage Site.</p>'+
                '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
                        '(last visited June 22, 2009).</p>'+
                '</div>'+
                '</div>';


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
        // boucle pour lire les latitudes et les longitudes pour afficher les markers

        var features = [];

        @foreach ($cartes as $carte)
          features.push(
            {
                'uid': '{{$carte->properties->uid}}',
                'marker': {position: new google.maps.LatLng({{$carte->properties->latlon[0]}}, {{$carte->properties->latlon[1]}} ), type: 'info'}
            }

        );
        @endforeach 




        // Create markers.
        features.forEach(function(feature) {
          var infowindow = new google.maps.InfoWindow({
                  content: 'Chargement...'
              });
          var marker = new google.maps.Marker({
            position: feature.marker.position,
            icon: icons[feature.marker.type].icon,
            map: map,
            iw: infowindow
          });
          // Ouverture de la modale
            marker.addListener('click', function() {
             // chargement ajax des données dans iw.content

             marker.iw.open(map, marker);
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