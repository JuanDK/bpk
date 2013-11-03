
<link
	href="<?php echo base_url('assets') ?>/dropzone/css/dropzone.css"
	type="text/css" rel="stylesheet" />
<script
	src="<?php echo base_url('assets') ?>/dropzone/dropzone.js"></script>
<script
	src="<?php echo base_url('assets') ?>/js/jquery-1.9.1.min.js"></script>
<script
	src="<?php echo base_url('assets') ?>/dropzone/init.js"></script>

<form action="<?php echo base_url('/dropzone/upload')?>"
	class="dropzone" id="myDropzone" method="post"
	enctype="multipart/form-data">
	<div class="fallback"><input name="file" type="file" /> 
	<input
	type="submit" value="upload" /></div>
</form>

