<?php 
	/**
	 * 
	 */
	class Contact_mod extends CI_Model
	{
		public function getList($searchValue='',$limit='',$offset='')
		{
			$this->db->select('*');
			if ($searchValue) {
				$this->db->like('brand_name',$searchValue);
				$this->db->or_like('modal_name',$searchValue);
				$this->db->or_like('full_name',$searchValue);
				$this->db->or_like('mobile',$searchValue);
			}
            $this->db->order_by('id','DESC');
			if ($limit) {
				return $this->db->get('cr_contact_us', $limit, $offset)->result();
			}else{
				return $this->db->get('cr_contact_us')->num_rows();
			}
		}
		
	}
?>