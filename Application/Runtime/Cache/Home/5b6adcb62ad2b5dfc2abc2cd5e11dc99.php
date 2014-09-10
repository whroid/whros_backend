<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>登录界面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/whros_backend/Public/css/whroid.css" type="text/css" media="screen" />
    <link href="/whros_backend/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="/whros_backend/Public/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>

</head>

<body id="login">

<script type="text/javascript">
    var root = "/whros_backend";
    var app = "/whros_backend/index.php";
    var action = "/whros_backend/index.php/Home/Login/index";
    </script>
<p>我来了</p>
<div id="login-wrapper" class="png_bg">

  	<div id="login-top">
    	<h1><?php echo ($title); ?></h1>
    	<!-- Logo (221px width) -->
    	<img id="logo" src="/whros_backend/Public/img/logo.png" alt="<?php echo ($title); ?>" />
    </div>
    
   	<!-- Form表单 --> 
  	<div id="login-content"> 
    	<form action="<?php echo U('Login/login');?>" method="POST">
      		<p>
        		<label>用户名</label>
        		<input class="text-input" type="text"  name="username"/>
      		</p>
      		
      		<div class="clear"></div>
      		
      		<p>
        		<label>密码</label>
        		<input class="text-input" type="password" name="password"/>
      		</p>
      		
      		<div class="clear"></div>
      		
      		<!--  
      		<p id="remember-password">
        			<input type="checkbox" />
       		 		记住我
       		 </p>
       		 -->
      		<div class="clear"></div>
      		
      		<p>
        		<input class="button" type="submit" value="登录" />
      		</p>
    	</form>
  </div>

</div>	
</body>
</html>