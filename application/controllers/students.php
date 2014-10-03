<?php
class Students extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('student_model');
	}

	public function index(){
		$q['student'] = $this->student_model->unpaid();

		if($q['student'] != NULL){
			$this->load->view('dashboard', $q);
		}
		else{
			$this->index();
		}
	}

	public function search_student(){
		$q['student'] = $this->student_model->search_stud();

		if($q['student'] != NULL){
			$this->load->view('search', $q);
			$this->load->view('includes/footer');
		}
		else{
			$this->index();
		}
	}

	public function unpaid(){
		$q['student'] = $this->student_model->unpaid();

		if($q['student'] != NULL){
			$this->load->view('search', $q);
		}
		else{
			$this->index();
		}
	}

	public function balance(){
		$q['student'] = $this->student_model->balance();

		if($q['student'] != NULL){
			$this->load->view('search', $q);
		}
		else{
			$this->index();
		}
	}

	public function summary(){
		$q['summary'] = $this->student_model->summary();

		if($q){
			$this->load->view('summary', $q);
		}
	}

	public function student_profile(){
		$q['student'] = $this->student_model->student_profile();
		$this->load->view('student_profile', $q);
	}
}