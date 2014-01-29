<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
</head>
<table>
<?php foreach ($songs as $song): ?>
<tr>
	<td>ARTIST:</td><td><?php echo $song['artist']; ?></td>
	<td>TITLE:</td><td><?php echo $song['title']; ?></td>
</tr>
<?php endforeach; ?>
</table>
