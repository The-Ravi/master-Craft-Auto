<?php 



 /**

  * Gallery

  * Model Name : Gallery

  */

 class GalleryController extends MX_Controller
 {
 	function __construct()
 	{
 		parent::__construct();
 		if (!is_logged()) {
 			redirect('admin','location',301);
 		}
 		$this->load->model('Gallery');
 		$this->load->library('upload');

 	}



 	public function index($value='')

 	{



 		$data['categories'] = $this->db->select('id,cate_name')->where('status', 1)->get('cr_service_category')->result();

 		$this->load->view('index',$data);

 	}



 	public function galleryList($value='')

 	{

 		try {

			if ($resquest = $this->input->post()) {

				$draw = $resquest['draw'];

				$offset = $resquest['start'];

    			$limit = $resquest['length'];

    			$searchValue = $this->db->escape_str($resquest['search']['value']);

    			$galleries = $this->Gallery->galleryList($searchValue,$limit,$offset);

    			$totalRecodes = $this->Gallery->galleryList($searchValue);

    			$data = [];

    			foreach ($galleries as $key => $value) {

    				$imageUrl = base_url().'uploads/galleries/'.$value->image;

    				$data[] = [

    					'sno' => $key + 1,

    					'id' => $value->id,

    					'image' => '<img src="'.$imageUrl.'" width="40px">',

    					'category' => $value->categoryName,

    					'title' => $value->tittle,

    					'status' => $value->status == 1 ? 'Active' : 'Inactive',

    					'action' => '

    						<div class="buttons">

                                <a href="#" data-toggle="modal" data-id="'.$value->id.'" onclick="editGallery(this);"><i class="far fa-edit" title="Edit"></i></a>

                                <a href="javascript:void(0);" data-id="'.$value->id.'" onclick="deleteGallery(this);"><i class="fas fa-trash-alt" title="Delete"></i></a>

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



 	public function createGallery($value='')
 	{

 		try {

 			$id = $this->input->post('id');

 			$tittle = $this->input->post('tittle');

 			$category = $this->input->post('category');

 			$status = $this->input->post('status');



 			/**

 			 *  Image upload

 			 */

 			$imageName = '';

 			if (!empty($_FILES['image'])) {

 				$config['upload_path'] = 'uploads/galleries/';

        		$config['allowed_types'] = 'gif|jpg|png|jpeg';

        		$new_file_name = 'image_' . time(); // Prefix with timestamp

        		$config['file_name'] = $new_file_name;

        		$this->upload->initialize($config);

        		if (!$this->upload->do_upload('image')) {

		            $error = $this->upload->display_errors();

		            return $this->output->set_status_header(202)

				    ->set_content_type('application/json')

				    ->set_output(json_encode([

				    'status' => 202,

				    'message' => $error

				    ]));

		        } else {

		            $data = array('upload_data' => $this->upload->data());

            		$imageName = $data['upload_data']['file_name'];

		        }

 			}

 			/**

 			 *  End Image upload

 			 */



 			$attributes = [

 				'tittle' => $tittle,

 				'cate_id' => $category,

 				'status' => $status

 			];



 			if ($imageName) {

 				$attributes['image'] = $imageName;

 			}



 			if ($id != '' && $id != 'undefined') {

 				$response = $this->Gallery->updateGallery($attributes, $id);

 				if ($response) {

 					return $this->output->set_status_header(Http::OK)

						->set_content_type('application/json')

						->set_output(json_encode([

							'status' => Http::OK,

							'message' => 'Photo updated successfully.'

						]));

 				} else {

 					return $this->output->set_status_header(202)

				    ->set_content_type('application/json')

				    ->set_output(json_encode([

				    'status' => 202,

				    'message' => 'Unable to update photos, Something went wrong.'

				    ]));

 				}

 			}else{

 				$response = $this->Gallery->createGallery($attributes);



 				if ($response) {

 					return $this->output->set_status_header(Http::OK)

						->set_content_type('application/json')

						->set_output(json_encode([

							'status' => Http::OK,

							'message' => 'Photo added successfully.'

						]));

 				} else {

 					return $this->output->set_status_header(202)

				    ->set_content_type('application/json')

				    ->set_output(json_encode([

				    'status' => 202,

				    'message' => 'Unable to add photos, Something went wrong.'

				    ]));

 				}

 			}



 		} catch (Exception $e){

 			return $this->output->set_status_header(Http::BAD_REQUEST)

		    ->set_content_type('application/json')

		    ->set_output(json_encode([

		    'status' => Http::BAD_REQUEST,

		    'message' => $e

		    ]));

 		}

 	}



 	public function editGallery($value='')

 	{

 		try {

 			$json = trim(file_get_contents('php://input'));



 			if ($json) {

 				$attributes = json_decode($json, TRUE);

 				$id = $attributes['id'];

 				if ($id != '' && $id != 'undefined') {

 					$data = $this->Gallery->editGallery($id);

 					return $this->output->set_status_header(Http::OK)

						->set_content_type('application/json')

						->set_output(json_encode([

							'status' => Http::OK,

							'data' => $data,

							'message' => 'Photos.'

						]));

 				}else {

 					return $this->output->set_status_header(202)

				    ->set_content_type('application/json')

				    ->set_output(json_encode([

				    'status' => 202,

				    'message' => 'Id is required'

				    ]));

 				}

 			} else {

 				return $this->output->set_status_header(Http::BAD_REQUEST)

			    ->set_content_type('application/json')

			    ->set_output(json_encode([

			    'status' => Http::BAD_REQUEST,

			    'message' => 'Invalid request, access denied'

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



 	public function deleteGallery($value='')

 	{

 		try {



 			$json = trim(file_get_contents('php://input'));

 			if ($json) {

 				$attributes = json_decode($json, TRUE);

 				$id = $attributes['id'];

 				if ($id != '' && $id != 'undefined') {

 					$response = $this->Gallery->deleteGallery($id);

 					if ($response) {

	 					return $this->output->set_status_header(Http::OK)

							->set_content_type('application/json')

							->set_output(json_encode([

								'status' => Http::OK,

								'message' => 'Photo deleted successfully.'

							]));

	 				} else {

	 					return $this->output->set_status_header(202)

					    ->set_content_type('application/json')

					    ->set_output(json_encode([

					    'status' => 202,

					    'message' => 'Unable to delete photos, Something went wrong.'

					    ]));

	 				}

 				}else{

 					return $this->output->set_status_header(202)

				    ->set_content_type('application/json')

				    ->set_output(json_encode([

				    'status' => 202,

				    'message' => 'Id is required'

				    ]));

 				}

 			}else {

 				return $this->output->set_status_header(Http::BAD_REQUEST)

			    ->set_content_type('application/json')

			    ->set_output(json_encode([

			    'status' => Http::BAD_REQUEST,

			    'message' => 'Invalid request, access denied'

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

 }

?>