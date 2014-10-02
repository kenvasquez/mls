<?php $this->load->view('includes/header')?>
  <?php foreach($student as $stud): ?>
      <h4><a href="<?php echo base_url("students/student_profile/$stud->student_id")?>"><?php echo $stud->student_fname . "&nbsp" . $stud->student_lname; ?></a></h4><br>
  <?php endforeach;?>  
<?php $this->load->view('includes/footer')?>