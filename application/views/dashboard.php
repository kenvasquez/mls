<?php $this->load->view('includes/header'); ?>
	<!-- <div class="container-fluid" id="mid-body">
		<div class='row col-lg-3' id="ml-body">
			<h1>Hello World!</h1>
			<ul>
				
				
				
			</ul>
		</div>
		<div class="row col-lg-6 col-lg-offset-4" id="mr-body">
			<h1>HELLO WORLD</h1>
		</div>
	</div> -->
	<div class="row">
		<div class="col-sm-3 col-sm-offset-1" id="one">
			<h1>HELLO WORLD!</h1>
			<ul>
				<li><h3><a href="<?php echo base_url('students/unpaid')?>">UNPAID</a></h3></li>
				<li><h3><a href="<?php echo base_url('students/balance')?>">WITH BALANCE</a></h3></li>
				<li><h3><a href="<?php echo base_url('students/summary')?>">SUMMARY</a></h3></li>
			</ul>
		</div>
		<div class="col-sm-6" id="two">
			<h1>HELLO WORLD!</h1>
		</div>
	</div>
<?php $this->load->view('includes/footer'); ?>