<?php

class Usermodel extends CI_model
{
    function createuser($formArray)
    {
        $this->db->insert('users', $formArray);
    }

    function fetchuser()
    {
        return $user=$this->db->get('users')->result_array();
    }

    function deleteuser($userid)
    {
        $this->db->where('user_id', $userid);
        $this->db->delete('users');
    }

    function edituser($userid)
    {
        $this->db->where('user_id', $userid);
        return $user=$this->db->get('users')->result_array();
      
    }

    function updateuser($userid,$formArray)
    {
        //print_r($formArray);
        $this->db->where('user_id', $userid);
        $this->db->update('users', $formArray);
      
    }

    

}
?>