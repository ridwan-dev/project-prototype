<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Tutorial Google Map - Petani Kode</title>
  
  <script src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
  function initialize() {
    var locations = [

      <?php $i=1; foreach($kabupaten as $kb){
        echo "['<b>" .$kb->nama_kabupaten. "</b>'," .$kb->lat_kab. "," .$kb->long_kab. "," .$i. "]," ;
      $i++; } ?>
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(-1.28, 111.32),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
}

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
      'callback=initialize';
  document.body.appendChild(script);
}

window.onload = loadScript;
  </script>
  
</head>
<body>

  <div id="map" style="width:100%;height:600px;"></div>
  
  
  
</body>
</html>