<?php 

	class Order_model extends CI_Model
	{
    
         public function get_Orders() 
		{
			$this->db->select('cr_order.*,cr_models.name as model_name,cr_brands.name as brand_name')->join('cr_models','cr_models.id = cr_order.modal_id')->join('cr_brands','cr_brands.id = cr_order.brand_id');
			$this->db->order_by('cr_order.created_at', 'DESC');
			$orders = $this->db->get("cr_order")->result(); 
			$rows = [];
			if(!empty($orders)){
			    foreach($orders as $order){
			        $order->Servicelist= $this->getServicelistByorderId($order->id);
			        $rows[] = $order; 
			    }
			   return $rows;
			} else {
			    return [];
			}
		}
        
        public function getOrderDetailById() {
			$this->db->select('*,cr_order.id as id,cr_models.name as model_name,cr_brands.name as brand_name,cr_order.created_at');
			$this->db->from('cr_order');
			$this->db->join('cr_models', 'cr_models.id = cr_order.modal_id');
			$this->db->join('cr_brands', 'cr_brands.id = cr_order.brand_id');
			$this->db->join('cr_order_details', 'cr_order_details.order_id = cr_order.id');
			$this->db->join('cr_services', 'cr_services.id = cr_order_details.service_id');
			return $this->db->get()->result();
		}
		
		public function getOrderDetails($id)
		{
			$this->db->select('cr_order.*,cr_models.name as model_name,cr_brands.name as brand_name');
			$this->db->from('cr_order');
			$this->db->where('cr_order.id', $id);
			$this->db->join('cr_models', 'cr_models.id = cr_order.modal_id');
			$this->db->join('cr_brands', 'cr_brands.id = cr_order.brand_id');
			$data = $this->db->get()->row();
			$data->Servicelist=$this->getServicelistByorderId($id);
			return $data;
			
		}
		
		public function getServicelistByorderId($id="")
		{
          $orders = $this->db->select('service_id')->where('order_id',$id)->get('cr_order_details')->result();
		  $row = [];
		  foreach($orders as $order){
			$row['title'][] = $this->getTitleByseviceId($order->service_id);
		  }
		  return $row;
		}
		public function getTitleByseviceId($id="")
		{
          $data = $this->db->select('tittle,inner_title')->where('id',$id)->get('cr_services')->row();
		  if($data->inner_title == ""){
			return $data->tittle;
		  }else{
			return $data->inner_title;
		  }
		}
	
	}
?>