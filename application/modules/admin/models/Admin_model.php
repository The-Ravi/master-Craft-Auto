<?php 
 /**
  * 
  */
 class Admin_model extends CI_Model
 {
 	
 	public function login($email='')
 	{
 		return $this->db->where('email',$email)->get('cr_admin')->row();
 	}
 }

?>