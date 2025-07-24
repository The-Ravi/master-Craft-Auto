<?php 

	/**
	 * 
	 */
	class Cartcontroller extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Cartmodel');
		}

		public function addToCart($value='')
		{
			try {

				$id = $this->input->post('id');
				$session_id = $this->input->post('session_id');
				$services = $this->db->select('id,tittle,sub_title,inner_title')->where('id', $id)->get('cr_services')->row();
				$tittle = ($services->inner_title) ? $services->inner_title : $services->tittle;
				if($tittle == ''){
				    $tittle = $services->sub_title;
				}
				$newData = [
					'service_id' => $id,
					'tittle' => $tittle,
				];
				$newCartdata = [];
				$cartdata = $this->Cartmodel->addToCart($id, $session_id);

				if ($cartdata) {
					foreach ($cartdata as $data) {
						if ($data->service_id != $id) {
							$newCartdata[] = $data;
						}else{
							return $this->output->set_status_header(Http::ALLREADY_EXITS)
						    ->set_content_type('application/json')
						    ->set_output(json_encode([
						    'status' => Http::ALLREADY_EXITS,
						    'message' => 'Already in cart'
						    ]));
						}
					}
				}

				array_push($newCartdata, (object)$newData);
				$newcartdata = json_encode($newCartdata);
				$this->db->where('session_id', $session_id)->update('cr_cart', ['cartdata'=>$newcartdata]);
				return $this->output->set_status_header(Http::OK)
			    ->set_content_type('application/json')
			    ->set_output(json_encode([
			    'status' => Http::OK,
			    'message' => 'Add to Cart successfully.',
			    'data' => $newcartdata
			    ]));
				
			} catch (Exception $e) {
				return $this->output->set_status_header(Http::BAD_REQUEST)
			    ->set_content_type('application/json')
			    ->set_output(json_encode([
			    'status' => Http::BAD_REQUEST,
			    'message' => $e
			    ]));
			}
		}

		public function removeFromCart($value='')
		{
			try {
				if ($request = $this->input->post()) {
					$id = $request['id'];
					$session_id = $request['session_id'];
					$cartdata = $this->db->select('cartdata')->where('session_id', $session_id)->get('cr_cart')->row();
					$crdata = json_decode($cartdata->cartdata);
					
					$newCart = [];
					foreach ($crdata as $cart) {
						if ($cart->service_id != $id) {
							$newCart[] = $cart;
						}
					}
					$jsonCart = json_encode($newCart);

					$res = $this->db->where('session_id', $session_id)->update('cr_cart', ['cartdata'=>$jsonCart]);
					if ($res) {
						return $this->output->set_status_header(Http::OK)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::OK,
					    'message' => 'Remove From Cart Successfully.'
					    ]));
					}else{
						return $this->output->set_status_header(Http::BAD_REQUEST)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::BAD_REQUEST,
					    'message' => 'Something went wrong'
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

		public function bookingSessionCart($value='')
		{
			try {

				if ($request = $this->input->post()) {
					$res = $this->Cartmodel->bookingSessionCart($request);
					if ($res) {
						return $this->output->set_status_header(Http::OK)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::OK,
					    'message' => 'Add to cart successfully'
					    ]));
					}else{
						return $this->output->set_status_header(Http::BAD_REQUEST)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::BAD_REQUEST,
					    'message' => 'Something went wrong'
					    ]));
					}
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => 'Invalid Request'
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

		public function checkCartdata($value='')
		{
			try {
				$session_id = $this->input->post('session_id');
				$data = $this->db->where('session_id', $session_id)->get('cr_cart')->row();
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
				    'message' => 'data not found'
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

		public function getCartData($value='')
		{
			try {

				if ($request = $this->input->post()) {
					$data = $this->Cartmodel->getCartData($request);
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
					    'message' => 'data not found'
					    ]));
					}
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => 'Invalid Request'
				    ]));
				}
				
			} catch (Exception $e) {
			    echo "<pre>";
			    print_r($e);die;
				return $this->output->set_status_header(Http::BAD_REQUEST)
			    ->set_content_type('application/json')
			    ->set_output(json_encode([
			    'status' => Http::BAD_REQUEST,
			    'message' => $e
			    ]));
			}
		}

		public function changeCarCartModelById($value='')
		{
			try {
				if ($request = $this->input->post()) {
					$id = $request['id'];
					$data = $this->db->select('brand_id,model_id,petrol_type,id')->where('id', $id)->get('cr_cart')->row();
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
					    'message' => 'data not found'
					    ]));
					}
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => 'Invalid Request'
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

		public function updateBookingSessionCart($value='')
		{
			try {

				if ($request = $this->input->post()) {
					$session_id = $request['session_id'];
					$brand_id = $request['brand_id'];
					$modal_id = $request['modal_id'];
					$petrol_type = $request['petrol_type'];
					$cartId = $request['cartId'];

					$data = [
						'brand_id' => $brand_id,
						'model_id' => $modal_id,
						'petrol_type' => $petrol_type
					];

					$res = $this->db->where('session_id', $session_id)->where('id', $cartId)->update('cr_cart', $data);
					if ($res) {
						return $this->output->set_status_header(Http::OK)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::OK,
					    'message' => 'Changed successfully'
					    ]));
					}else{
						return $this->output->set_status_header(Http::BAD_REQUEST)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::BAD_REQUEST,
					    'message' => 'Something went wrong'
					    ]));
					}
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => 'Invalid Request'
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

		public function orderCreated($value='')
		{
			try {

				if ($request = $this->input->post()) {
					$res = $this->Cartmodel->orderCreated($request);
					if ($res == 1) {
						$this->db->where('session_id', $request['session_id'])->delete('cr_cart');
						return $this->output->set_status_header(Http::OK)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::OK,
					    'message' => 'Your requested submitted successfully'
					    ]));
					}else{
						return $this->output->set_status_header(Http::BAD_REQUEST)
					    ->set_content_type('application/json')
					    ->set_output(json_encode([
					    'status' => Http::BAD_REQUEST,
					    'message' => 'Something went wrong'
					    ]));
					}
				}else{
					return $this->output->set_status_header(Http::BAD_REQUEST)
				    ->set_content_type('application/json')
				    ->set_output(json_encode([
				    'status' => Http::BAD_REQUEST,
				    'message' => 'Invalid Request'
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