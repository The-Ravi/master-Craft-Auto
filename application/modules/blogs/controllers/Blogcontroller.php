<?php 

/**
 * Blog Controller
 * Handles blog listing and single blog display
 */
class Blogcontroller extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
	}

	/**
	 * Display all blogs
	 */
	public function index()
	{
		try {
			// Get all published blogs
			$blogs = $this->Blog_model->getAllBlogs();
			
			$data = [
				'blogs' => $blogs
			];
			
			$this->load->view('index', $data);
		} catch (Exception $e) {
			show_error('Error loading blogs: ' . $e->getMessage());
		}
	}

	/**
	 * Display single blog details
	 */
	public function view($blog_slug = '')
	{
		try {
			if (empty($blog_slug)) {
				redirect('blogs');
			}

			// Get blog by slug
			$blog = $this->Blog_model->getBlogBySlug($blog_slug);
			
			if (!$blog) {
				show_404();
				return;
			}

			// Increment view count
			$this->Blog_model->incrementViews($blog->id);

			$data = [
				'blog' => $blog
			];
			
			$this->load->view('blog-detail', $data);
		} catch (Exception $e) {
			show_error('Error loading blog: ' . $e->getMessage());
		}
	}
}
?>
