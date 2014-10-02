<?php foreach($student as $stud): ?>
<img class='pull-right' src="http://www3.uic.edu.ph/images/100x102/<?php echo $stud->student_id_num;?>.jpg">
<h1><?php echo $stud->student_lname . "," . "&nbsp" . $stud->student_fname ?></h1>
<h2>BMLS-<?php echo $stud->student_section ?></h2>
<?php $cp = $stud->payment_status;
	if($cp == 1){
		echo "Club Fee: Paid";
	}
	elseif ($cp == 2) {
		echo anchor(base_url(), 'Club Fee: Partial');
	}
	else{
		echo anchor(base_url(), 'Club Fee: Unpaid');
	}
?><br>
<?php endforeach;?>

<a href="#">Shirt Sizing</a><br><br>

<a href="<?php echo base_url() ;?>">Home</a>