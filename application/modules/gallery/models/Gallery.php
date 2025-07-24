<?php 

 /**
  * Gallery
  * Table Name : cr_photos
  */
 class Gallery extends CI_Model
 {
 	
 	public function galleryList($searchValue='', $limit='', $offset='')
 	{
 		$this->db->select('p.*, c.cate_name as categoryName')->from('cr_photos p');
 		$this->db->join('cr_service_category c', 'c.id = p.cate_id');
 		if ($searchValue) {
 			$this->db->like('p.tittle', $searchValue);
 			$this->db->like('c.cate_name', $searchValue);
 		}
 		if ($limit) {
 			$this->db->limit($limit, $offset);
 		}else{
 			return $this->db->get()->num_rows();
 		}

 		return $this->db->get()->result();
 	}

 	public function createGallery($attributes='')
 	{
 		$this->db->trans_begin();
		$this->db->insert('cr_photos', $attributes);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
        	return false;
		}else {
			$this->db->trans_commit();
			return true;
		}
 	}

 	public function updateGallery($attributes='', $id='')
	{
		return $this->db->where('id', $id)->update('cr_photos', $attributes);
	}

	public function deleteGallery($id='')
	{
		$getImage = $this->db->select('image')->where('id', $id)->get('cr_photos')->row()->image;
		if (!empty($getImage) && $getImage !='') {
			$imageSource = base_url().'uploads/galleries/'.$getImage;
			unlink($imageSource);
		}
		return $this->db->where('id', $id)->delete('cr_photos');
	}

	public function editGallery($id='')
	{
		return $this->db->where('id', $id)->get('cr_photos')->row();
	}
 }
?>