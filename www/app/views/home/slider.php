
  	<!-- Slider header-->
  	<script src="<?php echo base_url('assets') ?>/js/jquery.easing.1.2.js"></script>
  	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/theme-metallic.css" />
  	<script src="<?php echo base_url('assets') ?>/js/jquery.anythingslider.min.js"></script>
  	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/slider.css" />  	
  	<script>
	
  	$(function(){
  		 $('#slider1')
  		  .anythingSlider({
  		   toggleControls : true,
  		   theme          : 'metallic',
  		   navigationFormatter : function(i, panel){ // add thumbnails as navigation links
  		    return '<img src="http://localhost:8888/boligportalkiller/AnythingSlider-master/demos/images/th-slide-' + ['civil-1', 'env-1', 'civil-2', 'env-2'][i - 1] + '.jpg">';
  		   }
  		  })
  		});

  	$(function() {
		$( "#home-tabs" ).tabs({
			beforeLoad: function( event, ui ) {
				ui.jqXHR.error(function() {
					ui.panel.html(
						"Couldn't load this tab. We'll try to fix this as soon as possible. " +
						"If this wouldn't be a demo." );
				});
			}
		});
	});
	</script>
	
	<div id="home-tabs">
	<ul>
		<li><a href="#slider-box">Photos</a></li>
		<li><a href="home/floorplan">Floor Plan</a></li>
		<li><a href="home/map">Map</a></li>
		
	</ul>
	
	
		<!-- Slider html -->
		<div id="slider-box">
		<ul id="slider1">
					  <li><img src="http://localhost:8888/boligportalkiller/AnythingSlider-master/demos/images/slide-civil-1.jpg"></li>
					  <li><img src="http://localhost:8888/boligportalkiller/AnythingSlider-master/demos/images/slide-env-1.jpg"></li>
					  <li><img src="http://localhost:8888/boligportalkiller/AnythingSlider-master/demos/images/slide-civil-2.jpg"></li>
					  <li><img src="http://localhost:8888/boligportalkiller/AnythingSlider-master/demos/images/slide-env-2.jpg"></li>
		</ul>
		</div>
	</div>
	