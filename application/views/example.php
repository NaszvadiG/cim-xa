<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="x-ua-compatible" content="IE=9" >
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<?php foreach($css_files as $file): ?><link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" /><?php endforeach; ?>
<?php foreach($js_files as $file): ?><script src="<?php echo $file; ?>"></script><?php endforeach; ?>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">		  
		<ul class="nav navbar-nav">
			<li><a class="navbar-brand" href="#">Menu:</a></li>
			<li><a href="<?php echo site_url('examples/offices_management')?>">Offices</a></li>
			<li><a href="<?php echo site_url('examples/employees_management')?>">Employees</a></li>
		</ul>
	</div>
</div> 
<div style='height:50px;'></div>  
<div>
	<?php echo $output; //THIS DISPLAYS THE CRUD ?>
</div>
</body>
</html>
