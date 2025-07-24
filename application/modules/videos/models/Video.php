<?php 

 /**
  * Gallery
  * Table Name : cr_videos
  */
 class Video extends CI_Model
 {
 	
 	public function videoList($searchValue='', $limit='', $offset='')
 	{
 		$this->db->select('v.*, c.cate_name as categoryName')->from('cr_videos v');
 		$this->db->join('cr_service_category c', 'c.id = v.cate_id');
 		if ($searchValue) {
 			$this->db->like('v.tittle', $searchValue);
 			$this->db->like('c.cate_name', $searchValue);
 		}
 		if ($limit) {
 			$this->db->limit($limit, $offset);
 		}else{
 			return $this->db->get()->num_rows();
 		}

 		return $this->db->get()->result();
 	}

 	public function createVideo($attributes='')
 	{
 		$this->db->trans_begin();
		$this->db->insert('cr_videos', $attributes);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
        	return false;
		}else {
			$this->db->trans_commit();
			return true;
		}
 	}

 	public function updateVideo($attributes='', $id='')
	{
		return $this->db->where('id', $id)->update('cr_videos', $attributes);
	}

	public function deleteVideo($id='')
	{
		return $this->db->where('id', $id)->delete('cr_videos');
	}

	public function editVideo($id='')
	{
		return $this->db->where('id', $id)->get('cr_videos')->row();
	}
 }
?>