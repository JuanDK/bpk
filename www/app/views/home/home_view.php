<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<title>rent your shit!</title>
	
	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/themes/jquery-ui.min.css" />
  	<script src="<?php echo base_url('assets') ?>/js/jquery-1.9.1.min.js"></script>
  	<script src="<?php echo base_url('assets') ?>/ui/jquery-ui.js"></script>

	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/master.css" />

	<script>
	$(function() {
		$( "#menubar" ).buttonset();
	});
	</script>
</head>
<body>

	
	<div id="body">
	
	<div id="toolbar" class="ui-widget-header ui-corner-tl ui-corner-tr">
		
		<form style="margin-top: 1em;">
			<div id="menubar">
				<?php echo anchor('home','Home')?>
				<?php echo anchor('/','Search')?>
				<?php echo anchor('home/property','Property')?>
				<?php echo anchor('user/join','User')?>
				
			</div>
		</form>
	</div>
	


	
		
	</div>

	<p></p>
	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	

</body>
</html>