<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<!-- CODEIGNITER PRESENTATION LAYER -->
<table>
<?php foreach ($songs as $song): ?>
<tr>
	<td>ARTIST:</td><td><?php echo $song['artist']; ?></td>
	<td>TITLE:</td><td><?php echo $song['title']; ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
