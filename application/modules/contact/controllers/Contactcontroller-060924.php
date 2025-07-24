<?php 

	/**
	 * 
	 */
	class Contactcontroller extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Contact_mod');
		}

		public function index($value='')
		{
			$this->load->view('index');
			
		}

		public function getAllcontact($value='')
		{
			try {
				if ($request = $this->input->post()) {
					$draw = $request['draw'];
					$offset = $request['start'];
        			$limit = $request['length'];
        			$searchValue = $this->db->escape_str($request['search']['value']);
        			$services = $this->Contact_mod->getList($searchValue,$limit,$offset);
        			$totalRecodes = $this->Contact_mod->getList($searchValue);
        			$data = [];
        			foreach ($services as $key => $value) {
        			    $ipdresss = $value->ip_address;
        				$data[] = [
        					'id' => $value->id,
        					'brand_name' => $value->brand_name,
        					'modal_name' => $value->modal_name,
        					'full_name' => $value->full_name,
        					'mobile' => $value->mobile,
        					'message' => $value->message,
        					'ip_address' => $ipdresss,
        					'created_at' => date('Y-M-d', strtotime($value->created_at))
        				];
        			}
					$response = [
						'draw' => intval($draw),
						'iTotalDisplayRecords' => $totalRecodes,
						'iTotalRecords' => $totalRecodes,
						'data'=> $data
					];
					return $this->output->set_status_header(Http::OK)
							->set_content_type('application/json')
							->set_output(json_encode($response));
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => "Invalid request access denied"
				    ]));
				}
				
			} catch (Exception $e) {
				return $this->output->set_status_header(Http::BAD_REQUEST)
			    ->set_content_type('application/json')
			    ->set_output(json_encode([
			    'status' => Http::BAD_REQUEST,
			    'message' => $e
			    ]));
			}
		}

		public function exportToCsv($value='')
		{
			try {
				
				
                header('Content-Type: text/csv');
    			header('Content-Disposition: attachment; filename="'.time().'_'.date('Y-m-d').'_contact.csv"');
				$f = fopen('php://output', 'w');

				fputcsv($f, ['Id','Brand Name','Modal Name','Full Name','Mobile Number','Message','IP Address','Created Date']);
				$rows = $this->db->get('cr_contact_us')->result();
				foreach ($rows as $key => $value) {
					$data = [$key + 1, $value->brand_name,$value->modal_name,$value->full_name, $value->mobile, $value->message, $value->ip_address,date('Y-M-d', strtotime($value->created_at))];
					fputcsv($f, $data);
				}
				
				
				exit();
				
			} catch (Exception $e) {
				print_r($e);die;
			}
		}
	}
?>