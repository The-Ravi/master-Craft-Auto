<?php 

/**
 * 
 */
class Cartmodel extends CI_Model
{
	public function bookingSessionCart($request='')
	{
		$brand_id = trim($request['brand_id']);
		$modal_id = trim($request['modal_id']);
		$service_id = trim($request['wash_id']);
		$session_id = trim($request['session_id']);
		$petrol_type = trim($request['petrol_type']);
		$services = $this->db->select('id,tittle,sub_title,inner_title')->where('id', $service_id)->get('cr_services')->row();
		$tittle = ($services->inner_title) ? $services->inner_title : $services->tittle;
		if($tittle == ''){
		    $tittle = $services->sub_title;
		}
		$cartdata[] = [
			'service_id' => $service_id,
			'tittle' => $tittle,
		]; 
		$cartData = json_encode($cartdata);
		$data = [
			'session_id' => $session_id,
			'cartdata' => $cartData,
			'brand_id' => $brand_id,
			'model_id' => $modal_id,
			'petrol_type' => $petrol_type
		];

		$this->db->trans_start();
		$res = $this->db->insert('cr_cart',$data);
		if ($res == false) {
			$this->db->trans_rollback();
			return false;
		}
		$this->db->trans_complete();
		return true;
	}

	public function addToCart($id='', $session_id='')
	{
		if (!empty($id) && !empty($session_id)) {
			$data = $this->db->select('cartdata')->where('session_id', $session_id)->get('cr_cart')->row();
			$cartdata = json_decode($data->cartdata);
			return $cartdata;
		}else{
			return false;
		}
	}

	public function getCartData($request='')
	{
		$session_id = $request['session_id'];
		if (!empty($session_id) && $session_id !='') {
			$data = $this->db->where('session_id', $session_id)->get('cr_cart')->row();
			if ($data) {
				$data->brandName = $this->getBrandNameById($data->brand_id);
				$data->modalName = $this->getModalNameById($data->model_id);
				$data->image = $this->getImageByModelId($data->model_id);
				return $data;
			}else{
				return [];
			}
		}else{
			return [];
		}
	}

	public function getImageByModelId($id='')
	{
		$data = $this->db->select('car_image')->where('id',$id)->get('cr_models')->row();
		return $data->car_image;
	}

	public function getBrandNameById($id='')
	{
		$data = $this->db->select('name')->where('id',$id)->get('cr_brands')->row();
		return $data->name;
	}

	public function getModalNameById($id='')
	{
		$data = $this->db->select('name')->where('id',$id)->get('cr_models')->row();
		return $data->name;
	}

	public function orderCreated($request='')
	{
		$session_id = $request['session_id'];
		$phone_number = $request['phone_number'];
		$otp = $request['otp'];
		$optData = $this->db->select('verification_token')->where('mobile', $phone_number)->get('cr_otp')->row();
		$verification_token = $optData->verification_token;
		if (verify_hash($otp,$verification_token)) {
			$cart = $this->db->where('session_id', $session_id)->get('cr_cart')->row();

			$data = [
				'mobile' => $phone_number,
				'brand_id' => $cart->brand_id,
				'modal_id' => $cart->model_id,
				'petrol_type' => $cart->petrol_type,
				'status' => 1
			];

			$this->db->insert('cr_order', $data);
			$orderId = $this->db->insert_id();
			if ($orderId) {
				$cartData = json_decode($cart->cartdata);
				foreach ($cartData as $carts) {
					$data1 = [
						'order_id' => $orderId,
						'service_id' => $carts->service_id,
						'status' => 1
					];

					$this->db->insert('cr_order_details', $data1);
				}

				return 1;
			}
		}else{
			return false;
		}
	}
	
}

?>