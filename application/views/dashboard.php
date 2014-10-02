<!DOCTYPE html>
<html>
	<h1>Hello World!</h1>
	<br><br><br>
	<?php echo form_open('students/search_student');?>
	<input type="text" name="search" placeholder="Student Name or ID Number"></input>
	<input type="submit" name="submit" value="Submit">
	<?php echo form_close();?>
	<ul>
		<li><a href="<?php echo base_url('students/unpaid')?>">Unpaid</a></li>
		<li><a href="<?php echo base_url('students/balance')?>">Student With Balance</a></li>
		<li><a href="<?php echo base_url('students/summary')?>">Summary</a></li>
	</ul>
</html>