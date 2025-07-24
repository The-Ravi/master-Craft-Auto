<?php 

 /**
  * 
  */
 class Servicecate_model extends CI_Model
 {
 	
 	public function getList($searchValue='',$limit='',$offset='')
 	{
 		$this->db->select('*');
 		if ($searchValue) {
 			$this->db->like('cate_name',$searchValue);
 		}

 		if ($limit) {
 			return $this->db->get('cr_service_category',$limit,$offset)->result();;
 		}else{
 			return $this->db->get('cr_service_category')->num_rows();
 		}
 	}

 	public function chechCategoryBySlug($slug='',$id='')
 	{
 		if ($id) {
 			return $this->db->where('slug', $slug)->where('id !=', $id)->get('cr_service_category')->row();
 		}else{
 			return $this->db->where('slug', $slug)->get('cr_service_category')->row();	
 		}
 		
 	}

 	public function addServiceCategory($data='')
 	{
 		return $this->db->insert('cr_service_category', $data);
 	}

 	public function getServiceCategoryById($id='')
 	{
 		return $this->db->where('id', $id)->get('cr_service_category')->row();
 	}

 	public function deleteServiceCategoryById($id='')
 	{
 		return $this->db->where('id', $id)->delete('cr_service_category');
 	}

 	public function updateServiceCategory($data='', $id='')
 	{
 		return $this->db->where('id', $id)->update('cr_service_category', $data);
 	}
 }
?>