<?php
    class Ordercontroller extends MX_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('Order_model');
            if(!is_logged()){
                redirect('admin');
               }
        }
        
        public function index() {
            $data["orders"] = $this->Order_model->get_Orders();
            $this->load->view('order-list',$data);
           
	    }

        public function getOrderDetails($id)
        {
            $data['order'] = $this->Order_model->getOrderDetails($id);
            $this->load->view('view-order',$data);
        }
        
       public function exportToCsv($value='')
		{
			try {
                header('Content-Type: text/csv');
    			header('Content-Disposition: attachment; filename="'.time().'_'.date('Y-m-d').'_contact.csv"');
				$f = fopen('php://output', 'w');

				fputcsv($f, ['Order No','Mobile No','Brand Name','Model Name','Fuel Type','ServiceList','Status','Created Date']);
                $rows = $this->Order_model->getOrderDetailById();
                foreach ($rows as $key => $value) {
                    
                $data = [$value->id, $value->mobile,$value->brand_name,$value->model_name,$value->petrol_type,$value->tittle,$value->status,date('Y-M-d', strtotime($value->created_at))];
                    fputcsv($f, $data);
					
				}
				exit();
			} catch (Exception $e) {
				print_r($e);die;
			}
		}
    }
    
?>