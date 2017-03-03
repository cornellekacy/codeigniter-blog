<?php

class Users extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
    }
    function login()
    {
        if($this->session->userdata("user_id"))//If already logged in
        {
            redirect(base_url());//redirect to the blog page
        }
        $data['error'] = 0;
        if($this->input->post())//data inputed for login
        {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $user = $this->m_user->login($username, $password);
            if(!$user){ $data['error'] = 1;}//when user doesn't exist
            else //when user exist
            {
                $this->session->set_userdata('user_id', $user['user_id']);
                $this->session->set_userdata('username', $user['username']);
                redirect(base_url().'index.php/posts/admin');
            }
        }
         $this->load->view('login',$data);
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'index.php/posts/index');
    }
    function register()
    {

        $data['error'] = NULL;
        if($this->input->post())
        {
            $config = array(
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'trim|required|min_length[3]|is_unique[users.username]'//is unique username in the user's table of DB
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required|min_length[5]|max_length[20]'
                ),
                array(
                    'field' => 'passconf',
                    'label' => 'Password confirmed',
                    'rules' => 'trim|required|matches[password]',
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'trim|required|is_unique[users.email]|valid_email',//is unique email in the user's table of DB
                ),
            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($config);
            if($this->form_validation->run() == FALSE)
            {
                $data['error'] = validation_errors();
            }
            else 
            {
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => sha1($this->input->post('password')),
                );
                $user_id = $this->m_user->create_user($data);
            }
            
        }
        $data['message'] = 'Data Inserted Successfully';
        $this->load->view('admin/add_admin',$data);
    }
}