<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
	<title><?php echo $title?></title>
	<meta name="description" content="<?php echo $description?>">
	<meta name="keywords" content="<?php echo $keywords?>">
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header class="navbar navbar-static-top bs-docs-nav navbar-inverse" id="top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand">LaravelCN.club</a>
		</div>
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<ul class="nav navbar-nav">
				<li>
					<a href="/"><?php echo trans('Home');?></a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://expo.bootcss.com">登录</a></li>
				<li><a href="http://blog.getbootstrap.com">注册</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php echo $left;?>
		</div>
		<div class="col-md-3">
			<?php echo $right;?>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		Copyright @ 2014-<?php echo date('Y');?>
	</div>
</footer>
<script src="/bootstrap/js/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>