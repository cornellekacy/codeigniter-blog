<?php

class Pages extends CI_Controller
{
    function contact()
    {
        $class_name = array(
            'home_class'=>'', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'current');
        
        $this->load->view('posts',$class_name);

    }
}
