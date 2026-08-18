<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware extends Middleware
{
    public function handle()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['student_portal_key'])) {
            $_SESSION['student_portal_key'] = 'granted';
        }

        if (isset($_SESSION['student_portal_key']) && $_SESSION['student_portal_key'] === 'granted') {
            return true;
        }

        redirect(site_url('student'));
        exit;
    }
}