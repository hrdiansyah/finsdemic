<!--main js file start--> 
<script type="text/javascript" src="<?=base_url()?>assets/edm/js/jquery.js"></script> 
<script type="text/javascript" src="<?=base_url()?>assets/edm/js/bootstrap.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/edm/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/edm/js/modernizr.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/edm/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/edm/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/edm/js/custom.js"></script>
<script src='<?=base_url()?>assets/edm/js/mapbox-gl.js'></script>
<script>$(function() { $.scrollIt(); });</script> 
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiYWtzaGF5aGFuZGdlIiwiYSI6InI2bzhEcUUifQ.8r-lNnjAuIZUk8pjhtxlFw';
var map = new mapboxgl.Map({
  container: 'map',
  center: [144.965065, -37.817917],
  zoom: 11,
  style: 'mapbox://styles/mapbox/basic-v9',
  hash: false,
});
var marker = new mapboxgl.Marker()
  .setLngLat([30.5, 50.5])
  .addTo(map);
map.scrollZoom.disable();
map.dragPan.disable();
</script>
<!--main <?=base_url()?>assets/edm/js file end-->
</body>
</html>