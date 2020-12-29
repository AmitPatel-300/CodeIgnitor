<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function showuser()
    {
        $this->load->model('Usermodel');
        $users=$this->Usermodel->fetchuser();
        //$data=array();
        $data['users']=$users;
        $this->load->view('showuserlist', $data);
      
    }

    public function delete($userid) {
        $this->load->model('Usermodel');
        $this->Usermodel->deleteuser($userid);
        $this->session->set_flashdata("success", "Record Deleted Successfully");
        redirect(base_url().'index.php/Register/showuser');
    }

    public function edit($userid) {
        $this->load->model('Usermodel');
        $user=$this->Usermodel->edituser($userid); 
        $data=array();
        $data['user']=$user;
        //$this->load->view('updateuser', $data);

        $this->form_validation->set_rules('username', 'Name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('contact', 'contact', 'required');
        $this->form_validation->set_rules('pass', 'password', 'required');

        if ($this->form_validation->run()==false) {
             $this->load->view('updateuser', $data);
        } else {
            $formArray=array();
            $formArray['user_name']=$this->input->post('username');
            $formArray['user_email']=$this->input->post('email'); 
            $formArray['contact']=$this->input->post('contact');
            $formArray['password']=$this->input->post('pass');

            $this->Usermodel->updateuser($userid, $formArray);
            $this->session->set_flashdata("success", "Record Updated Successfully");
            redirect(base_url().'index.php/Register/showuser');
            
        }
    }

      
    public function registerform()
    {
        $this->load->model('Usermodel');
        $this->form_validation->set_rules('username', 'Name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('contact', 'contact', 'required');
        $this->form_validation->set_rules('pass', 'password', 'required');

        if ($this->form_validation->run()==false) {
            $this->load->view('form');
        } else {
            $formArray=array();
            $formArray['user_name']=$this->input->post('username');
            $formArray['user_email']=$this->input->post('email'); 
            $formArray['contact']=$this->input->post('contact');
            $formArray['password']=$this->input->post('pass');

            $this->Usermodel->createuser($formArray);
            $this->session->set_flashdata("success", "Record inserted Successfully");
            redirect(base_url().'index.php/Register/showuser');
            
        }
        
    }
}
?>