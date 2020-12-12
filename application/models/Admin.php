<?php

Class Admin extends CI_Model
{
    function validate()
    {
       $arr['username'] = $this->input->post('username');
       $arr['password'] = $this->input->post('password');

    //  print_r($arr);
    // $this->db->where('username',$username);
    // $this->db->where('password',$password);

    return($this->db->get_where('admin',$arr)->row());    

   }
}
