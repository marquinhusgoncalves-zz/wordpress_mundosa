
<footer>
	<span class="bold">&copy; 2015 / MUNDOSA </span>
	<img src="<?php bloginfo('stylesheet_directory');?>/img/logorodape.png" alt="Ícone como surgimos">
	<span>Av. Imperatriz Leopoldina, 454 - Sala 32 - Bairro Nova Petrópolis - São Bernardo do Campo - São Paulo | (11) 4330-5822 | (11) 4332-7634</span>
</footer>
</div><!--div inteira-->

<?php wp_footer(); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function(){
    $('#Container').mixItUp();
});	
</script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 

<script type="text/javascript">

	function initialize() {
		var myLatlng = new google.maps.LatLng(-23.7050083, -46.5472141);
		var mapOptions = {
			zoom: 18,
			center: myLatlng,
			disableDefaultUI: false,
			scrollwheel: false,
			draggable: false
		}
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Mundo S/A'
		});

		var styles = [
		{
			stylers: [
			{ hue: "#6C1F1F" },
			{ saturation: -20 }
			]
		},{
			featureType: "road",
			elementType: "geometry",
			stylers: [
			{ lightness: 100 },
			{ visibility: "simplified" }
			]
		},{
			featureType: "road.local",
			elementType: "labels",
		}
		];

		map.setOptions({styles: styles});
	}

	google.maps.event.addDomListener(window, 'load', initialize);

</script>
</body>
</html>