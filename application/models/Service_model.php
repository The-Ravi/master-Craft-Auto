<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Service_model extends CI_Model
{
    // Get all service categories (active ones)
    public function get_categories()
    {
        return $this->db->where('status', 1)->order_by('short_order', 'asc')->get('cr_service_category')->result();
    }

    // Get all services (active, not subdata)
    public function get_services()
    {
        return $this->db->where('status', 1)
                        ->where('is_subdata', 0)
                        ->order_by('short_order', 'asc')
                        ->get('cr_services')->result();
    }

    // Get photos for a service (by cate_id or by another linking field)
    // If photos link directly to services by a service_id, use that instead.
    public function get_service_photos_by_category($cate_id)
    {
        return $this->db->where('cate_id', $cate_id)
                        ->where('status', 1)
                        ->get('cr_photos')->result();
    }

    // If images should be linked by service id, add this method (for example)
    public function get_photos_by_service($service_id)
    {
        // If you decide to relate photos directly to services later
        return $this->db->where('service_id', $service_id)
                        ->where('status', 1)
                        ->get('cr_photos')->result();
    }

    // Get a single service (optional)
    public function get_service($service_id)
    {
        return $this->db->where('id', $service_id)->get('cr_services')->row();
    }
}