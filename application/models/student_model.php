<?php
class Student_model extends CI_Model{

	public function search_stud(){
		$sql = "SELECT * FROM student WHERE student_lname = ? OR student_id_num = ? OR student_section = ?";
		$search = $this->input->post('search');

		$q = $this->db->query($sql, array($search, $search, $search));

		if($q->num_rows() == 0){	
			return FALSE;	
		}
		else{
			foreach($q->result() as $r){
				$student[] = $r;
			}
			return $student;	
		}
	}

	public function unpaid(){
		$q = $this->db->query("SELECT * FROM student WHERE payment_status = 0");

		if($q->num_rows() == 0){
			return FALSE;
		}
		else{
			foreach($q->result() as $r){
				$student[] = $r;
			}
			return $student;
		}
	}

	public function balance(){
		$q = $this->db->query("SELECT * FROM student WHERE payment_status = 2");

		if($q->num_rows() == 0){
			return FALSE;
		}
		else{
			foreach($q->result() as $r){
				$student[] = $r;
			}
			return $student;
		}
	}

	public function summary(){
		$q = $this->db->query("SELECT SUM(payment_amount) AS collected FROM club_fee;");

		if($q->num_rows() != 0){
			foreach($q->result() as $r){
				$summary[] = $r;
			}
			return $summary;
		}
		else{
			return FALSE;
		}
	}

	function student_profile(){
		$this->db->where('student_id', $this->uri->segment(3));
		$q = $this->db->get('student');

		if($q->num_rows() == 1){
			foreach($q->result() as $r){
				$student[] = $r;
			}
			return $student;
		}

		else{
			return FALSE;
		}
	}
}