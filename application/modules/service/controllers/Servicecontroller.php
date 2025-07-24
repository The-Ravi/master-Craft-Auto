<?php 

	/**
	 * 
	 */
	class Servicecontroller extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Service_model');
			$this->load->model('tags/Tag_mod'); 
			if (!is_logged()) {
				redirect('admin','location',301);
			}
		}

		public function index($value='')
		{
			$data['rows'] = $this->Service_model->getCategory();
			$data['tags'] = $this->Tag_mod->getTagsByPage('services');
			$this->load->view('index', $data);
		}

		public function getAllService($value='')
		{
			try {

				if ($request = $this->input->post()) {
					$draw = $request['draw'];
					$offset = $request['start'];
        			$limit = $request['length'];
        			$searchValue = $this->db->escape_str($request['search']['value']);
        			$services = $this->Service_model->getList($searchValue,$limit,$offset);
        			$totalRecodes = $this->Service_model->getList($searchValue);

        			$data = [];
        			foreach ($services as $service) {
        			    $imageUrl = base_url().'assets/backend/images/noImage.png';
        			    if($service->image !=''){
        			        $imageUrl = base_url().'uploads/services/'.$service->image;
        			    }
        				
        				$data[] = [
        					'id' => $service->id,
        					'image' => '<img src="'.$imageUrl.'" width="60px">',
        					'title' => $service->tittle,
        					'sub_title' => $service->sub_title,
        					'inner_title' => $service->inner_title,
        					'duration' => $service->duration,
        					'category' => $service->category,
        					'description' => substr($service->description,0,50),
        					'short_order' => $service->short_order,
        					'status' => $service->status == 1 ? 'Active' : 'Inactive',
        					'action' => '
        						<div class="buttons">
                                    <a href="#" data-toggle="modal" data-id="'.$service->id.'" onclick="editServices(this);"><i class="far fa-edit" title="Edit"></i></a>
                                    <a href="javascript:void(0);" data-id="'.$service->id.'" onclick="deleteServices(this);"><i class="fas fa-trash-alt" title="Delete"></i></a>
                                </div>
        					'
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

		public function addServices($value='')
		{
			try {

				$cate_id = $this->input->post('cate_id');
				$title = $this->input->post('title');
				$sub_tittle = $this->input->post('sub_tittle');
				$inner_tittle = $this->input->post('inner_tittle');
				$duration = $this->input->post('duration');
				$short_order = $this->input->post('short_order');
				$description = $this->input->post('description');
				$status = $this->input->post('status');
				$slug = slug_genrate($title);

				  $filename = '';
               
				$image = $_FILES['image']['name'];
				if(!empty($image)){
				    $ext = pathinfo($image, PATHINFO_EXTENSION);
				    $filename = time().'_services_.'.$ext;
				}

				$config['upload_path'] = 'uploads/services/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image') && !empty($_FILES['image']['name'])) {
		            $error = $this->upload->display_errors();
		            return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => $error
				    ]));
		        } else {
		            $this->upload->data();   
		        }

		        $checkServices = $this->Service_model->checkServices($slug,$cate_id);
		      //  if ($checkServices) {
		      //  	return $this->output->set_status_header(Http::BAD_REQUEST)
				    // ->set_content_type('application/json')
				    // ->set_output(json_encode([
				    // 'status' => Http::BAD_REQUEST,
				    // 'message' => "Services Allready Exits"
				    // ]));
		      //  }

		        $data = [
		        	'cate_id' => $cate_id,
		        	'tittle' => $title,
		        	'sub_title' => $sub_tittle,
		        	'inner_title' => $inner_tittle,
		        	'duration' => $duration,
		        	'short_order' => $short_order,
		        	'slug' => $slug,
		        	'description' => $description,
		        	'image' => $filename,
		        	'status' => $status
		        ];

		        $res = $this->Service_model->addServices($data);
		        if ($res) {
	    			return $this->output->set_status_header(Http::OK)
					->set_content_type('application/json')
					->set_output(json_encode([
					'status' => Http::OK,
					'message' => 'Add Service successfully.',
					]));
	    		}else{
	    			return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => "Something went wrongs"
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

		public function updateServicesById($value='')
		{
			try {

				$id = $this->input->post('id');
				$cate_id = $this->input->post('cate_id');
				$title = $this->input->post('title');
				$sub_tittle = $this->input->post('sub_tittle');
				$inner_tittle = $this->input->post('inner_tittle');
				$duration = $this->input->post('duration');
				$short_order = $this->input->post('short_order');
				$description = $this->input->post('description');
				$status = $this->input->post('status');
				$old_img = $this->input->post('old_img');
				$slug = slug_genrate($title);

				$image = $_FILES['image']['name'];
				$ext = pathinfo($image, PATHINFO_EXTENSION);
				$filename = time().'_services_.'.$ext;

				if ($_FILES['image']['name'] == '') {
					$filename =  $old_img;
				}else{
					$config['upload_path'] = 'uploads/services/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
					$config['file_name'] = $filename;
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('image') && !empty($_FILES['image']['name'])) {
			            $error = $this->upload->display_errors();
			            return $this->output->set_status_header(Http::BAD_REQUEST)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::BAD_REQUEST,
					    'message' => $error
					    ]));
			        } else {
			            $this->upload->data();   
			        }
				}

				

		      //  $checkServices = $this->Service_model->checkServices($slug,$cate_id,$id);
		      //  if ($checkServices) {
		      //  	return $this->output->set_status_header(Http::BAD_REQUEST)
				    // ->set_content_type('application/json')
				    // ->set_output(json_encode([
				    // 'status' => Http::BAD_REQUEST,
				    // 'message' => "Services Allready Exits"
				    // ]));
		      //  }

		        $data = [
		        	'cate_id' => $cate_id,
		        	'tittle' => $title,
		        	'sub_title' => $sub_tittle,
		        	'inner_title' => $inner_tittle,
		        	'duration' => $duration,
		        	'short_order' => $short_order,
		        	'slug' => $slug,
		        	'description' => $description,
		        	'image' => $filename,
		        	'status' => $status
		        ];

		        $res = $this->Service_model->updateServices($data, $id);
		        if ($res) {
	    			return $this->output->set_status_header(Http::OK)
					->set_content_type('application/json')
					->set_output(json_encode([
					'status' => Http::OK,
					'message' => 'Service updated successfully.',
					]));
	    		}else{
	    			return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => "Something went wrongs"
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

		public function getServicesById($value='')
		{
			try {

				$id = $this->input->post('id');
				$data = $this->db->where('id', $id)->get('cr_services')->row();

				if ($data) {
					return $this->output->set_status_header(Http::OK)
					->set_content_type('application/json')
					->set_output(json_encode([
					'status' => Http::OK,
					'message' => 'data found',
					'data' => $data,
					]));
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => 'data not found',
				    'data' => []
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
		
		public function deleteServicesById(){
		    try{
		        
		        $id = $this->input->post('id');
		        $res = $this->db->where('id',$id)->delete('cr_services');
		        if ($res) {
					return $this->output->set_status_header(Http::OK)
					->set_content_type('application/json')
					->set_output(json_encode([
					'status' => Http::OK,
					'message' => 'Services deleted successfully.'
					]));
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => 'Something went wrong',
				    ]));
				}
		        
		    }catch(\Exception $e){
		        return $this->output->set_status_header(Http::BAD_REQUEST)
			    ->set_content_type('application/json')
			    ->set_output(json_encode([
			    'status' => Http::BAD_REQUEST,
			    'message' => $e
			    ]));
		    }
		}
	}
?>