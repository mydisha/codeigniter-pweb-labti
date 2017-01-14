        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> | Template by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>
</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/timepicker/bootstrap-clockpicker.min.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlJ3TDTWGwz7ZW1JI011TA5JbDs0Mbv0M"></script>

	<script type="text/javascript">
    	$(document).ready(function(){
            initGoogleMaps();
    	});
	</script>

    <script type="text/javascript">
   function initGoogleMaps() {
        var myLatlng = new google.maps.LatLng(-8.650979, 116.324944);
       var mapOptions = {
           zoom: 11,
           center: myLatlng,
           scrollwheel: false,
           styles: [{
               "featureType": "water",
               "stylers": [{
                   "saturation": 43
               }, {
                   "lightness": -11
               }, {
                   "hue": "#0088ff"
               }]
           }, {
               "featureType": "road",
               "elementType": "geometry.fill",
               "stylers": [{
                   "hue": "#ff0000"
               }, {
                   "saturation": -100
               }, {
                   "lightness": 99
               }]
           }, {
               "featureType": "road",
               "elementType": "geometry.stroke",
               "stylers": [{
                   "color": "#808080"
               }, {
                   "lightness": 54
               }]
           }, {
               "featureType": "landscape.man_made",
               "elementType": "geometry.fill",
               "stylers": [{
                   "color": "#ece2d9"
               }]
           }, {
               "featureType": "poi.park",
               "elementType": "geometry.fill",
               "stylers": [{
                   "color": "#ccdca1"
               }]
           }, {
               "featureType": "road",
               "elementType": "labels.text.fill",
               "stylers": [{
                   "color": "#767676"
               }]
           }, {
               "featureType": "road",
               "elementType": "labels.text.stroke",
               "stylers": [{
                   "color": "#ffffff"
               }]
           }, {
               "featureType": "poi",
               "stylers": [{
                   "visibility": "off"
               }]
           }, {
               "featureType": "landscape.natural",
               "elementType": "geometry.fill",
               "stylers": [{
                   "visibility": "on"
               }, {
                   "color": "#b8cb93"
               }]
           }, {
               "featureType": "poi.park",
               "stylers": [{
                   "visibility": "on"
               }]
           }, {
               "featureType": "poi.sports_complex",
               "stylers": [{
                   "visibility": "on"
               }]
           }, {
               "featureType": "poi.medical",
               "stylers": [{
                   "visibility": "on"
               }]
           }, {
               "featureType": "poi.business",
               "stylers": [{
                   "visibility": "simplified"
               }]
           }]

       }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var geocoder = new google.maps.Geocoder();
        var markerLatlng;
        var infoWindow = new google.maps.InfoWindow;
       <?php foreach ($data as $d) {?>
       var lat = <?=$d->latitude?>;
       var lon = <?=$d->longitude?>;
       var nama = '<?=$d->nama?>';
        markerLatlng = new google.maps.LatLng(parseFloat(lat), parseFloat(lon));
       var marker = new google.maps.Marker({
           position: markerLatlng,
           draggable: false,
           title: nama
       });
       marker.setMap(map);
       this.bindInfoWindow(marker, this, infoWindow, nama);
       <?php }?>

   }
    </script>

    <script type="text/javascript">
    function bindInfoWindow(marker, map, infoWindow, html) {
        google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
    });
    }
    </script>

    <?php if ($this->uri->segment(2) === "tambah" || $this->uri->segment(2) === "edit") {?>

    <script type="text/javascript">
        $('.clockpicker').clockpicker();
    </script>

    <script type="text/javascript">
   function initGoogleMaps() {
       var myLatlng = new google.maps.LatLng(-8.650979, 116.324944);
       var mapOptions = {
           zoom: 13,
           center: myLatlng,
           scrollwheel: false,
           styles: [{
               "featureType": "water",
               "stylers": [{
                   "saturation": 43
               }, {
                   "lightness": -11
               }, {
                   "hue": "#0088ff"
               }]
           }, {
               "featureType": "road",
               "elementType": "geometry.fill",
               "stylers": [{
                   "hue": "#ff0000"
               }, {
                   "saturation": -100
               }, {
                   "lightness": 99
               }]
           }, {
               "featureType": "road",
               "elementType": "geometry.stroke",
               "stylers": [{
                   "color": "#808080"
               }, {
                   "lightness": 54
               }]
           }, {
               "featureType": "landscape.man_made",
               "elementType": "geometry.fill",
               "stylers": [{
                   "color": "#ece2d9"
               }]
           }, {
               "featureType": "poi.park",
               "elementType": "geometry.fill",
               "stylers": [{
                   "color": "#ccdca1"
               }]
           }, {
               "featureType": "road",
               "elementType": "labels.text.fill",
               "stylers": [{
                   "color": "#767676"
               }]
           }, {
               "featureType": "road",
               "elementType": "labels.text.stroke",
               "stylers": [{
                   "color": "#ffffff"
               }]
           }, {
               "featureType": "poi",
               "stylers": [{
                   "visibility": "off"
               }]
           }, {
               "featureType": "landscape.natural",
               "elementType": "geometry.fill",
               "stylers": [{
                   "visibility": "on"
               }, {
                   "color": "#b8cb93"
               }]
           }, {
               "featureType": "poi.park",
               "stylers": [{
                   "visibility": "on"
               }]
           }, {
               "featureType": "poi.sports_complex",
               "stylers": [{
                   "visibility": "on"
               }]
           }, {
               "featureType": "poi.medical",
               "stylers": [{
                   "visibility": "on"
               }]
           }, {
               "featureType": "poi.business",
               "stylers": [{
                   "visibility": "simplified"
               }]
           }]

       }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var geocoder = new google.maps.Geocoder();
       var marker = new google.maps.Marker({
           position: myLatlng,
           draggable: true,
           title: "Lombok!"
       });
       marker.setMap(map);

       var pos1 = marker.getPosition();
       geocoder.geocode({
           latLng: pos1
       }, function(responses) {
           if (responses && responses.length > 0) {
               console.log(responses[0].formatted_address);
           } else {
               console.log('Tidak dapat informasi lokasi.');
           }

           document.getElementById('latitude').value = responses[0].geometry.location.lat();
           console.log(responses[0].geometry.location.lat());
           document.getElementById('longitude').value = responses[0].geometry.location.lng();
           console.log(responses[0].geometry.location.lng());
           google.maps.event.addListener(marker, 'dragstart', function() {
               console.log('Drag Dimulai');
           });

           google.maps.event.addListener(marker, 'drag', function() {
               console.log('Marker sedang di Drag...');
               console.log('Latitude: ' + marker.getPosition().lat());
               document.getElementById('latitude').value = marker.getPosition().lat();
               console.log('Longitude: ' + marker.getPosition().lng());
               document.getElementById('longitude').value = marker.getPosition().lng();
           });

           google.maps.event.addListener(marker, 'dragend', function() {
               // var geocoder = new google.maps.Geocoder();
               var pos = marker.getPosition();
               console.log('Drag Marker Selesai');
               geocoder.geocode({
                   latLng: pos
               }, function(responses) {
                   if (responses && responses.length > 0) {
                       console.log(responses[0].formatted_address);
                       document.getElementById('alamat').value = responses[0].formatted_address;
                   } else {
                       console.log('Tidak dapat informasi lokasi.');
                   }
               });
               this.map.panTo(marker.getPosition());
           });

           google.maps.event.addListener(map, 'click', function(e) {
               console.log(e.latLng);
               var pos = marker.getPosition();
               geocoder.geocode({
                   latLng: pos
               }, function(responses) {
                   if (responses && responses.length > 0) {
                       console.log(responses[0].place_id);
                       document.getElementById('alamat').value = responses[0].formatted_address;
                   } else {
                       console.log('Tidak dapat informasi lokasi.');
                   }
               });
               marker.setPosition(e.latLng);
               this.map.panTo(marker.getPosition());
           });


       });

   }
    </script>


<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?callback=map.initGoogleMaps"></script> -->
<?php }?>
</html>
