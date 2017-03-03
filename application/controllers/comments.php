<?php

class Comments extends CI_Controller
{
    function add_comment($postID)
    {
        
        if(!$this->input->post())
        {
            redirect(base_url().'index.php/posts/post'.$postID);
        }
        
        
        $this->load->model('m_comment');
        $data = array(
            'post_id' => $postID,
            'fullname'=> $this->input->post('fullname'),
            'email'=> $this->input->post('email'),
            'comment' => $this->input->post('comment'),
            'status' => $this->input->post('status'),
        );
        $this->m_comment->add_comment($data);
        redirect(base_url().'index.php/posts/post/'.$postID);
    }
}