<?php
$config = [
	'login' => [
		[
		    'field' => 'email',
		    'label' => 'E-mail',
		    'rules' => 'required|valid_email',
		],
		[
		    'field' => 'password',
		    'label' => 'Password',
		    'rules' => 'required',
		],
	],
];