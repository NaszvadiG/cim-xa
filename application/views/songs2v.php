<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
<!-- CODEIGNITER PRESENTATION LAYER -->
<div class="container center">
<table class="table">
<?php foreach ($songs as $song): ?>
		<tr>
			<td>ARTIST:</td><td><?=htmlentities($song->artist, ENT_QUOTES)?></td>
			<td>TITLE:</td><td><?=htmlentities($song->title, ENT_QUOTES)?></td>
		</tr>
<?php endforeach; ?>
</table>
</div>
</body>
