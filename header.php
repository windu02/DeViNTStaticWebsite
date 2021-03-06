<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>Les projets DeViNT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href="./stylesheets/bootstrap.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-top: 60px;
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="./stylesheets/bootstrap-responsive.css" rel="stylesheet">

	<script src="./javascripts/jquery.js"></script>
	<script src="./javascripts/bootstrap-carousel.js"></script>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="./images/favicon.ico">
	<link rel="apple-touch-icon" href="./images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./images/apple-touch-icon-114x114.png">
  </head>

  <body>
<?php $action = ""; if(isset($_GET['action'])) { $action = htmlspecialchars($_GET['action']); } ?>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
		<div class="container-fluid">
		  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <a class="brand" href="/">Les projets DeViNT</a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li <?php if(strcmp($action,'') == 0) { echo 'class="active"'; } ?> ><a href="./index.php">Accueil</a></li>
			  <li <?php if(strcmp($action,'projets') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=projets">Quelques projets</a></li>
			  <li <?php if(strcmp($action,'photos') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=photos">Quelques photos</a></li>
			  <li <?php if(strcmp($action,'videos') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=videos">Quelques vidéos</a></li>
			  <li <?php if(strcmp($action,'cddevint') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=cddevint">Télécharger le CD DeViNT</a></li>
			  <li <?php if(strcmp($action,'about') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=about">En savoir +</a></li>
			  <li <?php if(strcmp($action,'partliens') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=partliens">Partenaires - Liens utiles</a></li>
			  <li <?php if(strcmp($action,'contact') == 0) { echo 'class="active"'; } ?> ><a href="./index.php?action=contact">Contact</a></li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>

	<div class="container-fluid">
	  <div class="row-fluid">
	  