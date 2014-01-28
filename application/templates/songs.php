<?php 
if (is_array($this->songs)): ?>
<table>
<?php foreach ($this->songs as $key => $val): ?>
<tr>
	<td>ARTIST:</td><td><?php echo $this->eprint($val['artist']); ?></td>
	<td>TITLE:</td><td><?php echo $this->eprint($val['title']); ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>