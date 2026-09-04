<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserModel extends Model
{
    protected $table = 'users';

    public function getAll()
    {
        return $this->db->table($this->table)->get_all();
    }
}

if (!class_exists('UsersModel')) {
    class UsersModel extends UserModel {}
}