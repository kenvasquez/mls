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
	<div class = 'container-fluid'>
		<div class="nav navbar-inverse navbar-fixed-top navbar-collapse" id = 'container'>
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-top-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <header class="collapse navbar-collapse" id="bs-top-navbar-collapse-1">
		    	<div class = 'navbar col-lg-5'>
		    		<a href="<?php echo base_url()?>"><img class="pull-left"  id = 'img-logo' src = "<?php echo base_url('images/amts-logo.png')?>"></a>
		    		<div class="col-lg-6">
					<div class="input-group" id="searchbar">
						<?php echo form_open('students/search_student');?>
						<input type="text" id="search" class="form-control " name="search" placeholder="ID Number or Last Name">
						<?php echo form_close();?>
					</div>
				</div> 
		    	</div> 
		      <ul class="nav navbar-nav navbar-right" id='right-nav'>
		      	<li><a href="<?php echo base_url()?>"><img id = 'img-home' src = "<?php echo base_url('images/house4.png')?>"> Home</a></li>
		        <li><a href="<?php echo base_url('users/logout')?>"><img id = 'img-logout' src = "<?php echo base_url('images/logout.png')?>"> Logout</a></li>
		      </ul>		  	
		    </header>
		  </div>
		</div>
		<div class="container-fluid" id="mid-body">
			<div class='row col-lg-3' id="ml-body">
				<h1>Hello World!</h1>
				<h2><a href="<?php echo base_url('students/unpaid')?>">UNPAID</a></h2>
				<h2><a href="<?php echo base_url('students/balance')?>">WITH BALANCE</a></h2>
				<h2><a href="<?php echo base_url('students/summary')?>">SUMMARY</a></h2>
			</div>
		</div>