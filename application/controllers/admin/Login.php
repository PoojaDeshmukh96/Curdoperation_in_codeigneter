<?php

Class Login extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin'))
             redirect('admin/dashboard');
        }

    function index()
    {
        $this->load->view('admin/login');  
    }
  
    function verify()
    {
        
        $this->load->model('Admin');
        $check = $this->Admin->validate();

       // echo "pooja";

        if($check)
        {
            $this->session->set_userdata('admin','1');
            redirect('admin/dashboard');
        }
        else
        {
            redirect('admin');
        }
    }
}
