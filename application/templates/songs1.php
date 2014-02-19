<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<style>
.container { 
width: 100% !important;
}
.center {
text-align: center;
margin-left: auto;
margin-right: auto;
}
</style>	
</head>
<body>
<!-- SAVANT PRESENTATION LAYER -->
<div class="container center">
<table class="table">
<?php foreach ($this->songs as $key=>$song): ?>
<tr>
	<td>ARTIST:</td><td><?php echo $this->eprint($song['artist']); ?></td>
	<td>TITLE:</td><td><?php echo $this->eprint($song['title']); ?></td>
</tr>
<?php endforeach; ?>
</table>
</div>
</body>
