<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
<!--<meta charset="utf-8" /> -->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>José Luis Calvo  - <?= $page_title ?></title>
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
<link rel="stylesheet" type="text/css" media="print" href="css/print.css"  />
<link rel="stylesheet" type="text/css" media="screen" href="css/prettyPhoto.css" />
<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:light' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>
<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen" href="css/ie-fix.css" /><![endif]-->
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script type="text/javascript" src="js/jquery.ScrollTo.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/jquery.quicksand-config.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
	<div id="page">
	
		<div id="header" class="clearfix">
			
			<h1>José Luis Calvo Martín</h1>
				
			<ul id="main-nav">
				<li<? if ($current == 'resume'): ?> class="current"<? endif; ?>><a href="index.php">Inicio</a></li>
				<li<? if ($current == 'portfolio'): ?> class="current"<? endif; ?>><a href="portfolio.php">Fotos</a></li>
				<li<? if ($current == 'project'): ?> class="current"<? endif; ?>><a href="project.php">Publicaciones</a></li>
				<li<? if ($current == 'aboutme'): ?> class="current"<? endif; ?>><a href="about.php">Curriculum</a></li>
			</ul>
				
		</div><!-- header end -->
			
		<div class="content-innertube">

			<div id="text"></div>

