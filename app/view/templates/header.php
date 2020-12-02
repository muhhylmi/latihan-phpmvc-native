<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/css/style.css"> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	  <a class="navbar-brand" href="<?php echo BASEURL ?>">PHPMVC</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-link active" href="<?php echo BASEURL ?>">Home </a>
	      <a class="nav-link" href="<?php echo BASEURL ?>/about">About </a>
	      <a class="nav-link" href="<?php echo BASEURL ?>/mahasiswa">Mahasiswa </a>
	    </div>
	  </div>
	</div>
</nav>