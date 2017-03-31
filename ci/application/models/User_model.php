<?php

class User_model extends CI_Model
{
	public function getUserByEmail($email)
	{
		$sanitizedEmail = trim(strip_tags($email));

		$query = $this->db
			->select('*')
			->from('users')
			->limit(1)
			->where('email', $sanitizedEmail)
			->get();

		return $query;
	}
}