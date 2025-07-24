<?php 

	/**
	 * 
	 */
	class Servicecategory extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Servicecate_model');
			if (!is_logged()) {
				redirect('admin','location',301);
			}
		}

		public function index($value='')
		{
			$this->load->view('index');
		}

		public function getAllServiceCategory($value='')
		{
			try {

				if ($resquest = $this->input->post()) {
					$draw = $resquest['draw'];
					$offset = $resquest['start'];
        			$limit = $resquest['length'];
        			$searchValue = $this->db->escape_str($resquest['search']['value']);
        			$category = $this->Servicecate_model->getList($searchValue,$limit,$offset);
        			$totalRecodes = $this->Servicecate_model->getList($searchValue);

        			$data = [];
        			foreach ($category as $cate) {
        				$imageUrl = base_url().'uploads/category/'.$cate->logo;
        				$data[] = [

        					'id' => $cate->id,
        					'image' => '<img src="'.$imageUrl.'" width="40px">',
        					'name' => $cate->cate_name,
        					'title' => $cate->title,
        					'sort_order' => $cate->short_order,
        					'status' => $cate->status == 1 ? 'Active' : 'Inactive',
        					'action' => '
        						<div class="buttons">
                                    <a href="#" data-toggle="modal" data-id="'.$cate->id.'" onclick="editServiceCategory(this);"><i class="far fa-edit" title="Edit"></i></a>
                                    <a href="javascript:void(0);" data-id="'.$cate->id.'" onclick="deleteServiceCategory(this);"><i class="fas fa-trash-alt" title="Delete"></i></a>
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

		public function addServiceCategory($value='')
		{
			try {

				if ($post = $this->input->post() &&  $_FILES) {
					$post = $this->input->post();
					$logo = $_FILES['logo']['name'];
					$ext = pathinfo($logo, PATHINFO_EXTENSION);
    				$filename = time().'_cate_.'.$ext;

    				$config['upload_path'] = 'uploads/category/';
    				$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
    				$config['file_name'] = $filename;
    				$this->load->library('upload', $config);
    				if (!$this->upload->do_upload('logo') && !empty($_FILES['logo']['name'])) {
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
			        // echo "<pre>";
			        // print_r($post);die;
    				$cate_name = $post['cate_name'];
			        $slug = slug_genrate($cate_name);
			    	$title = $post['title'];
			    	$sort_order = $post['sort_order'];
			    	$status = $post['status'];

			    	$checkCategory = $this->Servicecate_model->chechCategoryBySlug($slug);
			    	if ($checkCategory) {
			    		 return $this->output->set_status_header(Http::BAD_REQUEST)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::BAD_REQUEST,
					    'message' => "Service Category allready Exits"
					    ]));
			    	}else{

			    		$data = [
			    			'cate_name' => $cate_name,
			    			'slug' => $slug,
			    			'title' => $title,
			    			'short_order' => $sort_order,
			    			'logo' => $filename,
			    			'status' => $status,
			    		];

			    		$res = $this->Servicecate_model->addServiceCategory($data);
			    		if ($res) {
			    			return $this->output->set_status_header(Http::OK)
							->set_content_type('application/json')
							->set_output(json_encode([
							'status' => Http::OK,
							'message' => 'Add Service Category successfully.',
							]));
			    		}else{
			    			return $this->output->set_status_header(Http::BAD_REQUEST)
						    ->set_content_type('application/json')
						    ->set_output(json_encode([
						    'status' => Http::BAD_REQUEST,
						    'message' => "Something went wrongs"
						    ]));
			    		}
			    	}
					
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

		public function getServiceCategoryById($value='')
		{
			try {
				$id = $this->input->post('id');
				$data = $this->Servicecate_model->getServiceCategoryById($id);
				if ($data) {
					return $this->output->set_status_header(Http::OK)
					->set_content_type('application/json')
					->set_output(json_encode([
					'status' => Http::OK,
					'message' => 'data found',
					'data' => $data
					]));
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => "data not found",
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

		public function deleteServiceCategoryById($value='')
		{
			try {
				$id = $this->input->post('id');
				$res = $this->Servicecate_model->deleteServiceCategoryById($id);
				if ($res) {
					return $this->output->set_status_header(Http::OK)
					->set_content_type('application/json')
					->set_output(json_encode([
					'status' => Http::OK,
					'message' => 'Service Category deleted successfully.',
					]));
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => "Something went wrong"
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

		public function updateServiceCategoryById($value='')
		{
			try {
				$post = $this->input->post();
				
				$filename = '';
				$old_logo = $post['old_logo'];

				if (!empty($_FILES['logo']['name'])) {
					$logo = $_FILES['logo']['name'];
					$ext = pathinfo($logo, PATHINFO_EXTENSION);
					$filename = time().'_cate_.'.$ext;
					$config['upload_path'] = 'uploads/category/';
    				$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
    				$config['file_name'] = $filename;
    				$this->load->library('upload', $config);
    				if (!$this->upload->do_upload('logo') && !empty($_FILES['logo']['name'])) {
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
				}else{
					$filename = $old_logo;
				}

				
		        // echo "<pre>";
		        // print_r($post);die;
				
				$id = $post['id'];
				$cate_name = $post['cate_name'];
		        $slug = slug_genrate($cate_name);
		    	$title = $post['title'];
		    	$sort_order = $post['sort_order'];
		    	$status = $post['status'];

		    	$checkCategory = $this->Servicecate_model->chechCategoryBySlug($slug,$id);
		    	if ($checkCategory) {
		    		 return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => "Service Category allready Exits"
				    ]));
		    	}else{

		    		$data = [
		    			'cate_name' => $cate_name,
		    			'slug' => $slug,
		    			'title' => $title,
		    			'short_order' => $sort_order,
		    			'logo'  => $filename,
		    			'status' => $status,
		    		];

		    		$res = $this->Servicecate_model->updateServiceCategory($data,$id);
		    		if ($res) {
		    			return $this->output->set_status_header(Http::OK)
						->set_content_type('application/json')
						->set_output(json_encode([
						'status' => Http::OK,
						'message' => 'Service Category updated successfully.',
						]));
		    		}else{
		    			return $this->output->set_status_header(Http::BAD_REQUEST)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::BAD_REQUEST,
					    'message' => "Something went wrongs"
					    ]));
		    		}
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
	}
?>