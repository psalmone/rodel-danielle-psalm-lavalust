<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_title'] = 'My Student Portal';
        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $student = [
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

        $this->call->view('student_profile', $student);
    }
}