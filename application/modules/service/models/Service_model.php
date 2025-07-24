<?php 

	/**
	 * 
	 */
	class Service_model extends CI_Model
	{
		
		public function getList($searchValue='', $limit='', $offset='')
		{
			$this->db->select('cr_services.*,cr_service_category.cate_name as category')->join('cr_service_category','cr_service_category.id = cr_services.cate_id');
			if ($searchValue) {
				$this->db->like('tittle',$searchValue);
			}
            $this->db->order_by('cr_services.id','DESC');
			if ($limit) {
				return $this->db->get('cr_services', $limit, $offset)->result();
			}else{
				return $this->db->get('cr_services')->num_rows();
			}

		}

		public function getCategory($value='')
		{
			return $this->db->select('id,cate_name as name')->get('cr_service_category')->result();
		}

		public function checkServices($slug='', $cate_id='', $id='')
		{
			if ($id) {
				return $this->db->where(['slug'=> $slug,'cate_id'=> $cate_id])->where('id !=', $id)->get('cr_services')->row();
			}else{
				return $this->db->where(['slug'=> $slug,'cate_id'=> $cate_id])->get('cr_services')->row();
			}
		}

		public function updateServices($data='', $id='')
		{
			return $this->db->where('id', $id)->update('cr_services', $data);
		}

		public function addServices($data='')
		{
			return $this->db->insert('cr_services', $data);
		}
	}
?>