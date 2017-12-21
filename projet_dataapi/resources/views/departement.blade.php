@extends('template')
@section('main')

<p id="map" class="container col-8">

  <script>
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 9,
        center: new google.maps.LatLng(45.561141, 4.578258),
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
      @foreach ($cartedepartements as $cartedepartement)
        features.push(
          {
            'uid': '{{$cartedepartement->fields->uid}}',
            'marker': {position: new google.maps.LatLng({{$cartedepartement->fields->latlon[0]}}, {{$cartedepartement->fields->latlon[1]}} ), type: 'info'}
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
  
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTiDU0xPHlhlk4vHTPUnehaj_uX2W5FSo&callback=initMap">
  </script>

</p>
<form class="col-3">
  <div class="btn-group float-right mr-4">
    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
      <option selected>DEPARTEMENTS</option>
      <option value="1">AIN</option>
      <option value="2">ALLIER</option>
      <option value="3">ARDECHE</option>
      <option value="4">CANTAL</option>
      <option value="5">DRÔME</option>
      <option value="6">ISERE</option>
      <option value="7">LOIRE</option>
      <option value="8">HAUTE-LOIRE</option>
      <option value="9">PUY-DE-DÔME</option>
      <option value="10">RHÔNE</option>
      <option value="11">METROPOLE DE LYON</option>
      <option value="12">SAVOIE</option>
      <option value="13">HAUTE-SAVOIE</option>
    </select>
  </div>
</form>

<!-- button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button-->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal123.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection