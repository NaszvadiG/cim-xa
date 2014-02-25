<!DOCTYPE html>
<html>
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
<div style='height:20px;'></div>  
<div>
<form class="form-horizontal" role="form" method="post" action="<?php echo site_url();?>login/">>
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>" />
  <div class="form-group">
    <label for="user" class="col-sm-3 control-label">Username</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="user" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="pass" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="pass" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
      <div>
        <b>for demo purposes any value may be entered for the username and password</b>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
</body>
</html>
