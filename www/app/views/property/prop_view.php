<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<title>rent your shit!</title>
	
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/themes/jquery-ui.min.css" />
  	<script src="<?php echo base_url('assets') ?>/js/jquery-1.9.1.min.js"></script>
  	<script src="<?php echo base_url('assets') ?>/ui/jquery-ui.js"></script>

	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/master.css" />
	
</head>
<body>


	<div id="body">
	<h1>Welcome to CodeIgniter!</h1>
	

	
	
			
			<?php $this->load->view("property/slider") ?>
			
		
	<script>
		    $(function(){
		            $("#home-details").addClass("ui-widget-content");
		            $("#home-details").addClass("ui-corner-all");
		        });
	</script>		
			<div id="home-details">
				<div>details</div>
				<ul>
					<li>price:333DKK</li>
					<li>deposit:2100DKK</li>
				</ul>
				<div> description
					text
					text
					exttddddd
				</div>

			</div>
	
	
		
	</div>

	<p></p>
	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	

</body>
</html>