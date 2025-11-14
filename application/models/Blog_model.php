<?php

/**
 * Blog Model
 */

class Blog_model extends CI_Model
{
    private $table = 'blogs';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get all published blogs
     */
    public function get_all_blogs($limit = NULL, $offset = 0)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('status', 'published');
        $this->db->order_by('created_at', 'DESC');
        
        if ($limit !== NULL) {
            $this->db->limit($limit, $offset);
        }
        
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Get blog by slug
     */
    public function get_blog_by_slug($slug)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('slug', $slug);
        $this->db->where('status', 'published');
        
        $query = $this->db->get();
        return $query->row();
    }

    /**
     * Get blog by ID
     */
    public function get_blog_by_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id', $id);
        
        $query = $this->db->get();
        return $query->row();
    }

    /**
     * Get recent blogs
     */
    public function get_recent_blogs($limit = 5)
    {
        return $this->get_all_blogs($limit);
    }

    /**
     * Create new blog
     */
    public function create_blog($data)
    {
        return $this->db->insert($this->table, $data);
    }

    /**
     * Update blog
     */
    public function update_blog($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    /**
     * Delete blog
     */
    public function delete_blog($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    /**
     * Count all blogs
     */
    public function count_blogs()
    {
        $this->db->where('status', 'published');
        return $this->db->count_all_results($this->table);
    }
}

