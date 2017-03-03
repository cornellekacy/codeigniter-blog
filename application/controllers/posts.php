<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_db');
    }
    function index($start = 0)//index page
    {
        $data['posts'] = $this->m_db->get_posts(5, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/posts/index/';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        

        $this->load->view('posts',$data);
    }


        function archive($start = 0)//index page
    {
        $data['posts'] = $this->m_db->get_posts(10, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/posts/index/';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 10; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        

        $this->load->view('archive',$data);
    }



        function all_article($start = 0)//index page
    {
        $data['posts'] = $this->m_db->get_posts(10, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/posts/index/';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 10; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        

        $this->load->view('admin/articles',$data);
    }

        function post($post_id)//single post page
    {   
        $this->load->model('m_comment');
        $data['comments'] = $this->m_comment->get_comment($post_id);    
        $data['post'] = $this->m_db->get_post($post_id);

        $this->load->view('single_post',$data);
    }
       function article_view($post_id)//single post page
    {   
        $this->load->model('m_comment');
        $data['comments'] = $this->m_comment->get_comment($post_id);    
        $data['post'] = $this->m_db->get_post($post_id);

        $this->load->view('admin/article_view',$data);
    }

        function new_post()//Creating new post page
    {

        if($this->input->post())
        {
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post_tag' => $this->input->post('post_tag'),
                'post_cat' => $this->input->post('post_cat'),
                'post' => $this->input->post('post'),
                'active' => $this->input->post('active'),
            );
            $this->m_db->insert_post($data);
            redirect(base_url().'index.php/posts/admin_new_article');
            $data['message'] = 0;
        }
        else{
            

            $this->load->view('new_article');

        }
    }

        function editpost($post_id)//Edit post page
    {

        $data['success'] = 0;
        
        if($this->input->post())
        {
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post_tag' => $this->input->post('post_tag'),
                'post_cat' => $this->input->post('post_cat'),
                'post' => $this->input->post('post'),
                'active' => $this->input->post('active'),
            );
            $this->m_db->update_post($post_id, $data);
            $data['success'] = 1;
        }
        $data['post'] = $this->m_db->get_post($post_id);
        

        $this->load->view('admin/edit_post',$data);

    }

        function deletepost($post_id)//delete post page
    {

        $this->m_db->delete_post($post_id);
        redirect(base_url().'index.php/posts/all_article');
    }

        function comments()//single post page
    {   
        $this->load->model('m_comment');
        $data['comments'] = $this->m_comment->get_comments();    

        $this->load->view('admin/commenters',$data);

    }

    function internet($start = 0)//index page
    {
        $data['posts'] = $this->m_db->get_internet(5, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/posts/index/';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        

        $this->load->view('free_internet',$data);
    }
    function hacking($start = 0)//index page
    {
        $data['posts'] = $this->m_db->get_hacking(5, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/posts/index/';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        

        $this->load->view('hacking',$data);
    }
    function cracking($start = 0)//index page
    {
        $data['posts'] = $this->m_db->get_cracking(5, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/posts/index/';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        

        $this->load->view('cracking',$data);
    }
    function latest_tech_news($start = 0)//index page
    {
        $data['posts'] = $this->m_db->get_latest_tech_news(5, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/posts/index/';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        

        $this->load->view('latest_tech_news',$data);
    }

        function comments_approve()//single post page
    {   
        $this->load->model('m_comment');
        $data['comments'] = $this->m_comment->get_acomments();    

        $this->load->view('admin/approved',$data);

    }

         function comments_unapprove()//single post page
    {   
        $this->load->model('m_comment');
        $data['comments'] = $this->m_comment->get_ucomments();    

        $this->load->view('admin/unapproved',$data);

    }

        function search($query ='')//index page
        {

            $query = $query != '' ? $query :$this->input->get('query', TRUE);

            $data['posts'] = $this->m_db->search_posts($query);

            //pagination
            $this->load->library('pagination');
            $config['base_url'] = base_url().'index.php/posts/search/?query=' . urlencode($query);//url to set pagination
            $config['total_rows'] = $this->m_db->get_post_count();
            $config['per_page'] = 5;
            $this->pagination->initialize($config);
            $data['pages'] = $this->pagination->create_links(); //Links of pages
            $data['query'] = $query; //Links of pages

            $this->load->view('search',$data);

        }

		public function login()
	{
		$this->load->view('login');
	}
		public function about()
	{
		$this->load->view('about');
	}
		public function contact()
	{
		$this->load->view('contact');
	}
	// 	public function archive()
	// {
	// 	$this->load->view('archive');
	// }
		public function admin()
	{
		$this->load->view('admin/index');
	}
		public function admin_article()
	{
		$this->load->view('admin/articles');
	}
		public function admin_new_article()
	{
		$this->load->view('admin/new-article');
	}
		public function approved()
	{
		$this->load->view('admin/approved');
	}
		public function unapproved()
	{
		$this->load->view('admin/Unapproved');
	}
		public function commenters()
	{
		$this->load->view('admin/commenters');
	}
		public function tags()
	{
		$this->load->view('admin/tags');
	}
		public function settings()
	{
		$this->load->view('admin/settings');
	}
	    public function add_admin()
	{
		$this->load->view('admin/add_admin');
	}
}