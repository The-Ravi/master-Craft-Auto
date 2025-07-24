<?php

    class Home_public_mod extends CI_Model

    {



        public function get_services() 

        {

            $this->db->select('*');

            $this->db->order_by('short_order', 'ASC');

            $this->db->limit(5);

            return $this->db->get("cr_services")->result();	

        }



        public function service_detail($id)

        {

            $qry = $this->db->where('slug', $id)->get('cr_service_category')->result();

            foreach ($qry as $category) {

                $this->db->select('*');

                $this->db->where('cate_id', $category->id);

                $this->db->where('is_subdata', 0);

                $this->db->order_by('short_order','ASC');

                return $this->db->get("cr_services")->result();

            }

        }
 
        public function get_service_category() 
        {
            $this->db->select('*')->where('status',1);
            $this->db->order_by('short_order', 'ASC');
            return $this->db->get("cr_service_category")->result();	
        }



        public function getVideosByCateId($id='')
        {
            return $this->db->where('cate_id', $id)->where('status', 1)->get('cr_videos')->result();
        }
        public function galleries($slug='')
        {
            $id='';
            if($slug){
                $id = $this->serviceIdBySlug($slug);
            }
            $this->db->select('*')->from('cr_photos');
            if($id) {
                $this->db->where('cate_id', $id);
            }
            return $this->db->where('status', 1)->get()->result();
        }
        
        public function videos($slug='') {
            $id='';
            if($slug){
                $id = $this->serviceIdBySlug($slug);
            }
            $this->db->select('*')->from('cr_videos');
            if($id) {
                $this->db->where('cate_id', $id);
            }
            return $this->db->where('status', 1)->get()->result();
        }
        
        public function serviceIdBySlug($slug) {
           $qry = $this->db->where('slug', $slug)->get("cr_service_category")->row();
           if($qry) {
               return $qry->id;
           } else {
               return '';
           }
        }

        public function get_centers_by_pincode_and_city($pinCode, $city){
            if (!empty($pinCode)) {
                $this->db->where('pin_code', $pinCode);
            }

            if (!empty($city)) {
                $this->db->where('LOWER(city) =', strtolower($city));
            }

            $query = $this->db->get('cr_centers');
            return $query->result();
        }

        public function get_centers_by_pincode_and_city_paginated($pinCode, $city, $limit = 9, $offset = 0){
            if (!empty($pinCode)) {
                $this->db->where('pin_code', $pinCode);
            }

            if (!empty($city)) {
                $this->db->where('LOWER(city) =', strtolower($city));
            }

            $this->db->limit($limit, $offset);

            $query = $this->db->get('cr_centers');
            return $query->result();
        }

        public function get_total_centers_by_pincode_and_city($pinCode, $city){
            if (!empty($pinCode)) {
                $this->db->where('pin_code', $pinCode);
            }

            if (!empty($city)) {
                $this->db->where('LOWER(city) =', strtolower($city));
            }

            return $this->db->count_all_results('cr_centers');
        }
    }   

?>