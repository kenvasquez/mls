<?php $this->load->view('includes/header')?>
<script type="text/javascript">
      $(window).load(function(){
          $('#searchStud').modal('show');
      });
</script>
<div class="modal fade" id="searchStud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Search Result</h4>
      </div>
      <div class="modal-body">
        <?php foreach($student as $stud): ?>
            <h4><a href="<?php echo base_url("students/student_profile/$stud->student_id")?>"><?php echo $stud->student_fname . "&nbsp" . $stud->student_lname; ?></a></h4><br>
        <?php endforeach;?>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('includes/footer')?>