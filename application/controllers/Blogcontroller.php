<?php

/**
 * Blog Controller
 */

class Blogcontroller extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Blog_model");
        $this->load->model("Tag_mod");
    }

    /**
     * Display all blogs
     */
    public function index()
    {
        $data['page_title'] = 'Our Blog';
        $data['blogs'] = $this->Blog_model->get_all_blogs();
        $data["tags"] = $this->Tag_mod->get_page_tags('blog_index');
        
        $this->load->view("themes/frontend/common/top-head", $data);
        $this->load->view("themes/frontend/common/seo-head", $data);
        $this->load->view("themes/frontend/common/header", $data);
        $this->load->view("blog/index", $data);
        $this->load->view("themes/frontend/common/footer", $data);
    }

    /**
     * Display single blog post
     */
    public function view($slug = '')
    {
        if (empty($slug)) {
            redirect('blog');
        }

        $blog = $this->Blog_model->get_blog_by_slug($slug);
        
        if (empty($blog)) {
            show_404();
        }

        $data['page_title'] = $blog->title;
        $data['blog'] = $blog;
        $data["tags"] = $this->Tag_mod->get_page_tags('blog_single');
        
        $this->load->view("themes/frontend/common/top-head", $data);
        $this->load->view("themes/frontend/common/seo-head", $data);
        $this->load->view("themes/frontend/common/header", $data);
        $this->load->view("blog/single", $data);
        $this->load->view("themes/frontend/common/footer", $data);
    }
}

