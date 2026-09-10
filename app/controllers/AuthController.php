<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('AccountModel');
    }

    public function login()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();

        // Already logged in
        if (isset($_SESSION['auth_user'])) {
            redirect(site_url('products'));
            exit;
        }

        $this->call->view('auth');
    }

    public function do_login()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $account = $this->AccountModel->findByUsername($username);

        if ($account && $account['password'] === $password) {
            $_SESSION['auth_user'] = $account['username'];
            redirect(site_url('products'));
        } else {
            redirect(site_url('login?error=1'));
        }
        exit;
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        session_destroy();
        redirect(site_url('login'));
        exit;
    }
}
