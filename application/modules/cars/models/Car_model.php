<?php 

	class Car_model extends CI_Model
	{
         public function get_total_cars($name="") 
		   {
			$this->db->select('*');
			   if($name){
				$this->db->where('name',$name);
			   }
			   return $this->db->count_all("cr_models");
		   }
		  
         public function get_Cars($limit ="", $offset ="", $name="") 
		   {
			   $this->db->select('*');
			   
			   if($name){
				$this->db->where('name',$name);
			   }
			   $this->db->order_by('id', 'ASC');
				    return $this->db->get("cr_models",$limit, $offset)->result();
			   
		   }
         public function editCar($id)
           	{
	        	return $this->db->where('id',$id)->get('cr_models')->result();
        	}

	public function upadteCar($data,$id)
	{
		return $this->db->where('id',$id)->update('cr_models',$data);
	}
	
	}
?>