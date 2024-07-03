<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function signup ()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run('signup_valid')==False)
		{
		 $this->load->view('Admin/signup');
	    }
		else
		{
			$post=$this->input->post();
			$this->load->model('loginmodel');
			$result= $this->loginmodel->signup($post);
			if ($result)
			{
				$this->session->set_flashdata('message',"Successfully Registered");
				$this->session->set_flashdata('msg_class','bg-success');
			}
			else
			{
                $this->session->set_flashdata('message',"Please Try again");
				$this->session->set_flashdata('msg_class','bg-danger');
			}
			return redirect('Admin/login');

		}
	}
	public function login ()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run('signin_valid')==False)
		{
		 $this->load->view('Admin/login');
	    }
		else
		{
           $email=$this->input->post('email');
		   $pass=$this->input->post('password');
		   $this->load->model('loginmodel');
			$result= $this->loginmodel->signin($email,$pass);
			if ($result)
			{
				$this->session->set_flashdata('id',$result);
				return redirect ('welcome/dashboard');
			}
			else
				{
					$this->session->set_flashdata('error',"invalid email/password");
				}
				return redirect('Admin/login');
			
		}
	}
}
