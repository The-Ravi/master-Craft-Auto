<?php 

	/**
	 * 
	 */
	class Dashboardcontroller extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index($value='')
		{
			if (!is_logged()) {
				redirect('admin','location',301);
			}
			$data['total_contact'] = $this->db->get('cr_contact_us')->num_rows();
			$data['total_service'] = $this->db->get('cr_services')->num_rows();
			$data['total_models'] = $this->db->get('cr_models')->num_rows();
			$data['total_brands'] = $this->db->get('cr_brands')->num_rows();
			$this->load->view('index',$data);
		}
	}
?>