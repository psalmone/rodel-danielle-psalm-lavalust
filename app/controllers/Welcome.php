<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index() {
		$data = [
			'student_id' => '2026-0001',
			'name'       => 'Danielle Psalm V. Rodel',
			'course'     => 'BS Information Technology',
			'year'       => '3rd Year',
			'section'    => '3-f5',
			'email'      => 'daniellevitto271@gmail.com',
			'address'    => 'pinamalayan, oriental mindoro',
			'contact'    => '0963-590-3836',
			'hobbies'    => 'Coding, Basketball, Reading',
			'about'      => 'A passionate IT student who loves building web apps.',
		];

		$this->call->view('welcome_page', $data);
	}
}