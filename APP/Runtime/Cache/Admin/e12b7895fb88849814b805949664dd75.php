<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
	Whoareyou V1.0
	@desc 后台登陆界面
	@author	Rongx
	@since	20150303 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>博主地带(后台登陆)</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/body.css"/> 
</head>
<body>
<div class="container">
	<section id="content">
		<form action="<?php echo U('Admin/Login/login');?>" method="post" id="login">
			<h1>Login In</h1>
			<div>
				<input type="text" placeholder="YouName" required="" id="username" name="username" />
			</div>
			<div>
				<input type="password" placeholder="PassWord" required="" id="password" name="password" />
			</div>
			 <div class="">
				<span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span>			
			</div> 
			<div>
				<input type="submit" value="Let Me See" class="btn btn-primary" id="js-btn-login"/>
				<a href="#">Forget Who You Are ?</a>
			</div>
		</form>
		 <div class="button">
			<a href="http://localhost/Blog/index.php/Admin/Register/" target="_blank">Tell Me Who You Are</a>	
		</div>
	</section>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><hr>
<div style="text-align:center;">
<p><a href="http://localhost/Blog/" target="_blank">Life is brief, and then you die, you know?</a></p>
</div>
</body>
</html>