<?php 



 /**

  * Gallery

  * Model Name : Video

  */

 class VideoController extends MX_Controller 

 {

 	

 	function __construct()

 	{

 		parent::__construct();



 		if (!is_logged()) {

 			redirect('admin','location',301);

 		}



 		$this->load->model('Video');

 	}



 	public function index($value='')

 	{



 		$data['categories'] = $this->db->select('id,cate_name')->where('status', 1)->get('cr_service_category')->result();

 		$this->load->view('index',$data);

 	}



 	public function videoList($value='')

 	{

 		try {

			if ($resquest = $this->input->post()) {

				$draw = $resquest['draw'];

				$offset = $resquest['start'];

    			$limit = $resquest['length'];

    			$searchValue = $this->db->escape_str($resquest['search']['value']);

    			$videos = $this->Video->videoList($searchValue,$limit,$offset);

    			$totalRecodes = $this->Video->videoList($searchValue);

    			$data = [];

    			foreach ($videos as $key => $value) {

    				$data[] = [

    					'sno' => $key + 1,

    					'id' => $value->id,

    					'video_source_url' => '<iframe src="'.$value->video_source_url.'" width="60px" height="60px"></iframe>',

    					'category' => $value->categoryName,

    					'title' => $value->tittle,

    					'status' => $value->status == 1 ? 'Active' : 'Inactive',

    					'action' => '

    						<div class="buttons">

                                <a href="#" data-toggle="modal" data-id="'.$value->id.'" onclick="editVideo(this);"><i class="far fa-edit" title="Edit"></i></a>

                                <a href="javascript:void(0);" data-id="'.$value->id.'" onclick="deleteVideo(this);"><i class="fas fa-trash-alt" title="Delete"></i></a>

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



 	public function createVideo($value='')

 	{

 		try {

 			$id = $this->input->post('id');

 			$tittle = $this->input->post('tittle');

 			$category = $this->input->post('category');

 			$status = $this->input->post('status');

 			$video = $this->input->post('video');



 			$attributes = [

 				'tittle' => $tittle,

 				'cate_id' => $category,

 				'video_source_url' => $video,

 				'status' => $status

 			];



 			if ($id != '' && $id != 'undefined') {

 				$response = $this->Video->updateVideo($attributes, $id);

 				if ($response) {

 					return $this->output->set_status_header(Http::OK)

						->set_content_type('application/json')

						->set_output(json_encode([

							'status' => Http::OK,

							'message' => 'Video updated successfully.'

						]));

 				} else {

 					return $this->output->set_status_header(202)

				    ->set_content_type('application/json')

				    ->set_output(json_encode([

				    'status' => 202,

				    'message' => 'Unable to update Video, Something went wrong.'

				    ]));

 				}

 			}else{

 				$response = $this->Video->createVideo($attributes);



 				if ($response) {

 					return $this->output->set_status_header(Http::OK)

						->set_content_type('application/json')

						->set_output(json_encode([

							'status' => Http::OK,

							'message' => 'Video added successfully.'

						]));

 				} else {

 					return $this->output->set_status_header(202)

				    ->set_content_type('application/json')

				    ->set_output(json_encode([

				    'status' => 202,

				    'message' => 'Unable to add Video, Something went wrong.'

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



 	public function editVideo($value='')

 	{

 		try {

 			$json = trim(file_get_contents('php://input'));



 			if ($json) {

 				$attributes = json_decode($json, TRUE);

 				$id = $attributes['id'];

 				if ($id != '' && $id != 'undefined') {

 					$data = $this->Video->editVideo($id);

 					return $this->output->set_status_header(Http::OK)

						->set_content_type('application/json')

						->set_output(json_encode([

							'status' => Http::OK,

							'data' => $data,

							'message' => 'Video.'

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



 	public function deleteVideo($value='')

 	{

 		try {



 			$json = trim(file_get_contents('php://input'));

 			if ($json) {

 				$attributes = json_decode($json, TRUE);

 				$id = $attributes['id'];

 				if ($id != '' && $id != 'undefined') {

 					$response = $this->Video->deleteVideo($id);

 					if ($response) {

	 					return $this->output->set_status_header(Http::OK)

							->set_content_type('application/json')

							->set_output(json_encode([

								'status' => Http::OK,

								'message' => 'Video deleted successfully.'

							]));

	 				} else {

	 					return $this->output->set_status_header(202)

					    ->set_content_type('application/json')

					    ->set_output(json_encode([

					    'status' => 202,

					    'message' => 'Unable to delete Video, Something went wrong.'

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