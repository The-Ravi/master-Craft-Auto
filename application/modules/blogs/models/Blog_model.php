<?php 

/**
 * Blog Model
 * Handles all blog-related database operations
 */
class Blog_model extends CI_Model
{
	
	/**
	 * Get all published blogs with pagination
	 */
	public function getAllBlogs($limit = '', $offset = '')
	{
		$this->db->select('*')->from('cr_blogs')
			->where('status', 1)
			->order_by('created_at', 'DESC');
		
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		
		return $this->db->get()->result();
	}

	/**
	 * Get total count of published blogs
	 */
	public function getBlogsCount()
	{
		return $this->db->where('status', 1)
			->count_all_results('cr_blogs');
	}

	/**
	 * Get single blog by slug
	 */
	public function getBlogBySlug($slug = '')
	{
		return $this->db->select('*')
			->from('cr_blogs')
			->where('slug', $slug)
			->where('status', 1)
			->get()
			->row();
	}

	/**
	 * Get single blog by ID
	 */
	public function getBlogById($id = '')
	{
		return $this->db->select('*')
			->from('cr_blogs')
			->where('id', $id)
			->get()
			->row();
	}

	/**
	 * Create new blog
	 */
	public function createBlog($data = [])
	{
		if (empty($data)) {
			return false;
		}

		$data['created_at'] = date('Y-m-d H:i:s');
		
		if ($this->db->insert('cr_blogs', $data)) {
			return $this->db->insert_id();
		}
		return false;
	}

	/**
	 * Update blog
	 */
	public function updateBlog($id = '', $data = [])
	{
		if (empty($id) || empty($data)) {
			return false;
		}

		$data['updated_at'] = date('Y-m-d H:i:s');
		
		return $this->db->where('id', $id)
			->update('cr_blogs', $data);
	}

	/**
	 * Delete blog
	 */
	public function deleteBlog($id = '')
	{
		if (empty($id)) {
			return false;
		}

		return $this->db->where('id', $id)
			->delete('cr_blogs');
	}

	/**
	 * Increment blog view count
	 */
	public function incrementViews($id = '')
	{
		if (empty($id)) {
			return false;
		}

		$this->db->set('views', 'views+1', FALSE)
			->where('id', $id)
			->update('cr_blogs');
		
		return true;
	}

	/**
	 * Get recent blogs (for sidebar)
	 */
	public function getRecentBlogs($limit = 5)
	{
		return $this->db->select('id, title, slug, created_at')
			->from('cr_blogs')
			->where('status', 1)
			->order_by('created_at', 'DESC')
			->limit($limit)
			->get()
			->result();
	}

	/**
	 * Search blogs
	 */
	public function searchBlogs($searchTerm = '', $limit = '', $offset = '')
	{
		$this->db->select('*')
			->from('cr_blogs')
			->where('status', 1)
			->group_start()
			->like('title', $searchTerm)
			->or_like('content', $searchTerm)
			->or_like('excerpt', $searchTerm)
			->group_end()
			->order_by('created_at', 'DESC');
		
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		
		return $this->db->get()->result();
	}
}
?>
