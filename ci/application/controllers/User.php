<?php

class User extends CI_Controller
{
	public function index()
	{
		$loggedIn = false;

		$this->load->model('User_model');
		$this->load->library('form_validation');

		if($this->form_validation->run('login') === true)
		{
			$email    = stripslashes($this->input->post('username'));
			$password = $this->input->post('password');

			$user     = $this->User_model->getUserByEmail($email);

			$password = password_verify($password, $user->password);

			if(password_verify($password, $user->password)) 
			{
				if(isset($user->password) && $user->password === $password)
				{
					$loggedIn = true;
				}
			}
		}

		$data = [
			'loggedIn' => $loggedIn,
		];

		$this->load->view('login-view', $data);
	}
}