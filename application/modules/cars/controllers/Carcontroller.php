<?php
    class Carcontroller extends MX_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('Car_model');
            if(!is_logged()){
                redirect('admin');
               }
        }
        
        public function index() {
           $data["cars"] = $this->Car_model->get_Cars();
            $this->load->view('car-list',$data);
           
	    }

       
        public function editCar($id)
        {
            $data['car'] = $this->Car_model->editCar($id);
        
            $this->load->view('edit-car',$data);
        }
        public function update($id)
        {
            
            $image=$_FILES['car_image']['name'];
            $new_image=time().str_replace(' ', '',  $_FILES['car_image']['name']);
            $image_size= array(
            'thumb'=>array(200,200),
            'medium'=>array(300,300),
            'large'=> array(500,500)
            
            );
            foreach ($image_size as $key => $resize) {
                $config = array(
                'upload_path' => FCPATH.'uploads/cars',
                'allowed_types' => 'jpg|jpeg|png|webp',
                'file_name' =>  $new_image,
                'source_image'=> FCPATH.'uploads/cars/'.$new_image,
                'new_image'=> FCPATH.'uploads/cars/'.$key.'/' . $new_image,
                'image_library'=>'gd2',
                'create_thumb' => FALSE,
                'maintain_ratio' => TRUE,
                'width' => $resize[0],
                'height' => $resize[1]
                );
                
                $this->load->library('image_lib');
                $this->load->library('upload');
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('car_image')) {
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                echo $this->upload->display_errors();
                }
                $old_car_image = $this->input->post('old_car_image');
            if ($image=='') {
                 $new_image = $old_car_image;
             }
            }
            $status = $this->input->post('status');
            
            $data = array(
                
                'car_image' => $new_image,
                'status'  =>$status
            );
            //print_r($data);die;
            $result = $this->Car_model->upadteCar($data,$id);
            if ($result) {
                $this->session->set_flashdata(['success'=>'Update successfull.']);
                redirect('admin/cars');
            }else{
                $this->session->set_flashdata(['error'=>'Something is wrong.']);
                redirect('admin/cars/edit');
            }
        }
       
    }
    
?>