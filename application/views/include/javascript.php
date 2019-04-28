<script src="<?php echo base_url()?>assets/front/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/price-range.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery-ui.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo base_url()?>assets/front/js/gmaps.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/contact.js"></script>

	<script src="<?php echo base_url()?>assets/front/js/main.js"></script>
	<!-- Interval Harga-->
	<script type="text/javascript">  
 $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1500,
      values: [ 500,1000 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ).val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>