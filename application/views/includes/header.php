<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AMTS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url('layout/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('layout/css/bootstrap-theme.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('layout/css/styles.css');?>">
	<link rel='stylesheet' href='<?php echo base_url('layout/css/font-awesome.min.css');?>'>
	<style>
		body {
			font-family: 'Open Sans', sans-serif;
			font-size: 15px;
			margin-top: 50px;
			text-align: justify;
			padding-top: 75px;
		}
		textarea {
			font-family: monospace;
			resize: none;
		}
	</style>
</head>
<body id = 'main-body'>
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo base_url()?>">AMTS</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <form class="navbar-form navbar-left" action="<?php echo base_url('students/search_student')?>" method="post" accept-charset="utf-8" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search...." name="search">
		        </div>
		        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-wrench"></span> System Utilities <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Add Account</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#"><span class="glyphicon glyphicon-share"></span> Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>