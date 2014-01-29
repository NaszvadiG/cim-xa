<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
</head>
<table>
<?php foreach ($this->songs as $key=>$song): ?>
<tr>
	<td>ARTIST:</td><td><?php echo $this->eprint($song['artist']); ?></td>
	<td>TITLE:</td><td><?php echo $this->eprint($song['title']); ?></td>
</tr>
<?php endforeach; ?>
</table>
