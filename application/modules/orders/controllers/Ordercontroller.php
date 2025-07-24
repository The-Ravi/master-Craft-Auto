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
            //print_r($data);die;
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
    			header('Content-Disposition: attachment; filename="'.time().'_'.date('Y-m-d').'_order.csv"');
				$f = fopen('php://output', 'w');

				fputcsv($f, ['S.NO','Order No','Mobile No','Brand Name','Model Name','Fuel Type','Service','Status','Created Date']);
                $rows = $this->Order_model->getOrderDetailById();
                foreach ($rows as $key => $value) {
                    
                $data = [$key + 1,$value->id, $value->mobile,$value->brand_name,$value->model_name,$value->petrol_type,$value->tittle,$value->status,$value->created_at];
                    fputcsv($f, $data);
					
				}
				exit();
			} catch (Exception $e) {
				print_r($e);die;
			}
		}
    }
    
?>