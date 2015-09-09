<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<!-- Site CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>" />
	<title></title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('home'); ?>">CodeIgnite Tutorial</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('about'); ?>">About</a></li>
            <li><a href="<?php echo site_url('news'); ?>">News</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container">