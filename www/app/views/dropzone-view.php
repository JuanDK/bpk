<html>
    <head>   
	<link href="<?php echo base_url('assets') ?>/dropzone/css/dropzone.css" type="text/css" rel="stylesheet" />
	<script src="<?php echo base_url('assets') ?>/dropzone/dropzone.js"></script>
	<script src="<?php echo base_url('assets') ?>/js/jquery-1.9.1.min.js"></script>
	
	<script>
	Dropzone.autoDiscover = false;
	$(function() {
		  // Now that the DOM is fully loaded, create the dropzone, and setup the 
		  // event listeners

		  var myDropzone = new Dropzone("#my-dropzone");
		  
		  myDropzone.on("complete", function(file) {
		    /* Maybe display some more file information on your page */
			    alert("what?");
		  });

		})
	</script>
    </head>
    <body>
	<form action="<?php echo base_url('index.php/dropzone/upload')?>" class="dropzone" id="my-dropzone" >
	 <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
	</form>
    </body>
</html>
