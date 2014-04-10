<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title></title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<?php foreach($css_files as $file): ?> <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" /> <?php endforeach; ?>
<?php foreach($js_files as $file): ?> <script src="<?php echo $file; ?>"></script> <?php endforeach; ?>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo site_url('assets/css/campaign.css')?>">
</head>

<body>

<div class="row">
<div style="margin: 0 15px;">
<?php include 'top.php';?> 
</div>
</div>

<div class="row">
<div class="col-md-3">
<?php include 'left.php';?> 
</div>
<div class="col-md-9">
<?php include 'main.php';?> 
</div>
</div>

<div class="row">
<div style="margin: 0 15px;">
<?php include 'bottom.php';?>
</div>
</div>

</body>
</html>