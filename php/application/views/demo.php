<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">


	<style type="text/css">

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	

	
	#body{
		margin: 0 15px 0 15px;
	}
	
	

	</style>
</head>
<body>

<div id="container">
	

	<div id="body">
		<?php 
              $ci = &get_instance();
              $ci->load->model('tbdemouser');             
              $setvariable = $ci->tbdemouser->display();
              print_r($setvariable);
       ?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>