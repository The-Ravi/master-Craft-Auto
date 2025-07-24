<?php 

	function generate_token($data='')
	{
		$jwt = new JWT();
		$jwtSecretKey = JWT_SECRET_KEY;
		$token = $jwt->encode($data,$jwtSecretKey,'HS256');
		return $token;
	}

	function token_verify($token='', $email='', $name='')
	{
		$jwt = new JWT();
		$jwtSecretKey = JWT_SECRET_KEY;
		$decodeToken = $jwt->decode($token, $jwtSecretKey, 'HS256');
		
		$tokename = $decodeToken->name;
		$tokenemail = $decodeToken->email;
		
		if (($email === $tokenemail && $tokename === $name)) {
			return true;
		} else {
			return false;
		}
	}

	if (! function_exists('bcrypt')) {
	    function bcrypt($password) {
	        return password_hash($password, PASSWORD_BCRYPT);
	    }
	}

	if (! function_exists('verify_hash')) {
	    function verify_hash($secret, $hash) {
	        return password_verify($secret, $hash);
	    }
	}

	function is_logged()
	{
		if (isset($_SESSION['admin_token'])) {
			return true;
		}else{
			return false;
		}
	}

	function slug_genrate($text='')
	{
		return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $text), '-'));
	}

	if (! function_exists('generate_otp')) {
	    function generate_otp() { 
	        // return 123456;
	        return rand(100000, 999999);
	    }
	}

	function sendSms($mobile='', $otp='')
	{
		$curl = curl_init();
		  curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://sms.sendmsg.in/smpp?username=nippon_tr&password=lJMJqtexZEpP&from=NPISHM&smsmsgid=1201159144480210318&to=91'.$mobile.'&text=Hi%2520Nippon%252C%2520Your%2520OTP%2520is%2520'.$otp.'.%2520Do%2520not%2520share%2520with%2520anyone%2520-%2520NIPPON&urlshortening=1',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_HTTPHEADER => array(
		    'Content-Type: application/json'
		  ),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
	}
	if (!function_exists('custom_pagination')) {
		function custom_pagination($total_pages='',$page='',$baseUrl=''){
			$start = ($page -2);
			switch ($start) {
				case 0:
				$start = 1; 
				case -1:
				$start = 1;   
				case -2:
				$start = 1;
				case -3:
				$start = 1;             
			}
	
			$end = ($page+4);
	
			if ($end > $total_pages) {
				$end = $total_pages;
			}
			$pagination = '<ul class="pagination">';
				
				if ($page > 1) {
					$pagination .= '<li class="page-item"><a href="'.$baseUrl.'page='.($page - 1).'" class="page-link firstc">Prev</a></li>';
					$pagination .= '<li class="page-item"><a href="'.$baseUrl.'page=1" class="page-link lastc">First</a></li>';
				}
				
	
				for ($i=$start; $i <=$end; $i++) { 
					
					if ($i == $page) {
						$active = "active";
					}else{
						$active = "";
					}
	
				   $pagination .= '<li class="'.$active.'"><a class="page-link" href="'.$baseUrl.'page='.$i.'">'.$i.'</a></li>';
				  } 
					
				// $pagination .='<li>..</li>';
				
	
				if ($total_pages > $page) {
	
					$pagination .= '<li class="page-item"><a href="'.$baseUrl.'page='.$total_pages.'" class="page-link firstc">Prev</a></li>'; 
					$pagination .= '<li class="page-item"><a href="'.$baseUrl.'page='.($page + 1).'" class="page-link lastc">Next</a></li>';
				}
			   
				
				$pagination .= '</ul>';
	
				return $pagination;
		}
	
	}
	
	function getSubDataByService($service_id=''){
	    $ci=& get_instance();
	    
	    $subdata = $ci->db->where('service_id',$service_id)->get('cr_services_subdata')->result();
	    $serviceIds = [];
	    foreach($subdata as $data){
	        $serviceIds[] = $data->subdata_id;
	    }
	    if(!empty($serviceIds)){
	        return $ci->db->select('id,tittle')->where_in('id',$serviceIds)->get('cr_services')->result();
	    }
	}
	
	function sendMail($subject='', $message=''){
	    $ci=& get_instance();
	    
	    $ci->load->library('email');
         $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'noreply_ar@nipponpaint.co.in',
            'smtp_pass' => 'gweydlmqrzxieeek',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        
        $ci->load->initialize($config);
        $ci->email->set_newline("\r\n");
        $ci->email->set_header('Content-Type', 'text/html');
        // Set to, from, message, etc.
        $ci->email->from('noreply_ar@nipponpaint.co.in', 'Master craft');
        $ci->email->to('bodyshop.mastercraftggn@nipponpaint.co.in');
        $ci->email->bcc('madhu.pomelodigital@gmail.com,business.leadindia@gmail.com');
        $ci->email->subject($subject);
        $ci->email->message($message);
        $result = $ci->email->send();
        
        if($result){
           return true;
        } else {
             print_r($this->email->print_debugger());
            die();
        }
	}
?>