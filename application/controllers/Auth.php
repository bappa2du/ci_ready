<?php

class Auth extends CI_Controller
{
	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
 		$input = $this->input->post(null);
        $check_user = $this->db->where('email',$input['email'])->where('role','admin')->get('users')->row();
        if(!empty($check_user)){
            if(password_verify($input['password'],$check_user->password)){
            	$_SESSION['auth'] = $check_user;
                redirect('admin');
            }
        }
        redirect('auth');

	}

	public function logout()
	{
		session_destroy();
        redirect('/');
	}
}