<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('UserModel');
        $this->UsersModel = $this->UserModel;
    }

    public function index()
    {
        $data['users'] = $this->UserModel->getAll();
        $this->call->view('users', $data);
    }

    public function all()
    {
        $this->index();
    }
}

if (!class_exists('UsersController')) {
    class UsersController extends UserController {}
}