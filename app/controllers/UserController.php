<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('UsersModel');
    }

    public function all()
    {
        $data['users'] = $this->UsersModel->getAll();
        $this->call->view('users_view', $data);
    }
}