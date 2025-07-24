<?php 

	/**
	 * 
	 */
	class Faqcontroller extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Faq_mod');
		}

		public function index($value='')
		{
			$this->load->view('index');
		}

		public function getAllFaq($value='')
		{
			try {
				if ($request = $this->input->post()) {
					$draw = $request['draw'];
					$offset = $request['start'];
        			$limit = $request['length'];
        			$searchValue = $this->db->escape_str($request['search']['value']);
        			$faqs = $this->Faq_mod->getList($searchValue,$limit,$offset);
        			$totalRecodes = $this->Faq_mod->getList($searchValue);
        			$data = [];
        			foreach ($faqs as $key => $value) {
        				$ansers = $this->Faq_mod->getAnswerById($value->id);
        				$data[] = [
        					'id' => $value->id,
        					'question' => $value->question,
        					'answer' => $ansers,
        					'sort_order' => $value->set_position,
        					'created_at' => date('Y-M-d', strtotime($value->created_at)),
        					'status' => $value->status == 1 ? 'Active' : 'Inactive',
        					'action' => '
        						<div class="buttons">
                                    <a href="'.base_url().'admin/faq/edit/'.$value->id.'"><i class="far fa-edit" title="Edit"></i></a>
                                    <a href="javascript:void(0);" data-id="'.$value->id.'" onclick="deleteFaq(this);"><i class="fas fa-trash-alt" title="Delete"></i></a>
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

		public function getUsersFaq($value='')
		{
			try {
				if ($request = $this->input->post()) {
					$draw = $request['draw'];
					$offset = $request['start'];
        			$limit = $request['length'];
        			$searchValue = $this->db->escape_str($request['search']['value']);
        			$faqs = $this->Faq_mod->getUsersFaq($searchValue,$limit,$offset);
        			$totalRecodes = $this->Faq_mod->getUsersFaq($searchValue);
        			$data = [];
        			foreach ($faqs as $key => $value) {
        				$data[] = [
        					'id' => $value->id,
        					'name' => $value->name,
        					'question' => $value->question,
        					'email' => $value->email,
        					'mobile' => $value->phone_number,
        					'created_at' => date('Y-M-d', strtotime($value->doe)),
        					'status' => $value->status == 1 ? 'Active' : 'Inactive',
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

		public function faqUser($value='')
		{
			$this->load->view('faq_another');
		}

		public function create($value='')
		{
			$this->load->view('create');
		}

		public function saveFaq($value='')
		{
			try {
				$question = trim($this->input->post('question'));
				$answers = $this->input->post('answer');
				$set_position = $this->input->post('set_position');
				$status = $this->input->post('status');

				$data = [
					'question' => $question,
					'set_position' => $set_position,
					'status' => $status
				];

				$this->db->insert('cr_faq', $data);
				$insertId = $this->db->insert_id();
				if ($insertId) {
					foreach ($answers as $ans) {
						$ansData = [
							'question_id' => $insertId,
							'answer' => $ans
						];

						$this->db->insert('cr_faq_answers', $ansData);
					}
				}

			return redirect('admin/faq');
			} catch (Exception $e) {
				print_r($e);die;
			}
		}

		public function edit($id='')
		{
			if ($id) {
				$data['row'] = $this->Faq_mod->edit($id);
				
				$this->load->view('edit', $data);
			}else{
				redirect('admin/faq','location', 301);
			}
		}

		public function updateFaq($id='')
		{
			try {

				$question = trim($this->input->post('question'));
				$answers = $this->input->post('answer');
				$set_position = $this->input->post('set_position');
				$status = $this->input->post('status');

				$data = [
					'question' => $question,
					'set_position' => $set_position,
					'status' => $status
				];

				$this->db->where('id', $id)->update('cr_faq', $data);
				if ($id) {
					$res = $this->db->where('question_id', $id)->delete('cr_faq_answers');
					if ($res) {
						foreach ($answers as $ans) {
							$ansData = [
								'question_id' => $id,
								'answer' => $ans
							];
							$this->db->insert('cr_faq_answers', $ansData);
						}
					}
				}

				return redirect('admin/faq');

			} catch(\Exception $e){
				print_r($e);die;
			}
		}

		public function faqDelete($value='')
		{
			try{
				$id = $this->input->post('id');
				$res = $this->db->where('id', $id)->delete('cr_faq');
				if ($res) {
					$this->db->where('question_id', $id)->delete('cr_faq_answers');
				}
				return $this->output->set_status_header(Http::OK)
			    ->set_content_type('application/json')
			    ->set_output(json_encode([
			    'status' => Http::OK,
			    'message' => "FAQ Deleted successfully"
			    ]));
			} catch(\Exception $e){
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