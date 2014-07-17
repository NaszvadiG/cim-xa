<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
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
			<li><a href="<?=site_url()?>site/songs1">Songs--Idiorm model with a trivial Savant view</a></li>
			<li><a href="<?=site_url()?>site/songs2">Songs--Idiorm model with a trivial CI view</a></li>
			<li><a href="<?=site_url()?>site/songs2c">Songs--CI model with a trivial CI view</a></li>
		</ul>
	</div>
</div> 
</body>
