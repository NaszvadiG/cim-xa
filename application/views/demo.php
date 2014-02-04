<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a 
{
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
.dataTables_filter
{
	display:none;
}
</style>
</head>
<body>
<!--	
<div>
<a href='<?php echo site_url('demos/customers_management')?>'>Customers</a> |
<a href='<?php echo site_url('demos/orders_management')?>'>Orders</a> |
<a href='<?php echo site_url('demos/products_management')?>'>Products</a> |
<a href='<?php echo site_url('demos/offices_management')?>'>Offices</a> | 
<a href='<?php echo site_url('demos/employees_management')?>'>Employees</a> |		 
<a href='<?php echo site_url('demos/film_management')?>'>Films</a> | 
<a href='<?php echo site_url('demos/film_management_twitter_bootstrap')?>'>Twitter Bootstrap Theme [BETA]</a> | 
<a href='<?php echo site_url('demos/multigrids')?>'>Multigrid [BETA]</a>
</div>>
<div style='height:10px;'></div>
-->  
<div>
<?php echo $output; ?>
</div>
</body>
</html>
