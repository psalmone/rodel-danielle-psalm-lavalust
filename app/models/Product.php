<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product extends Model
{
    protected $table = 'products';

    public function getAll()
    {
        return $this->db->table($this->table)->get_all();
    }

    public function getById($id)
    {
        return $this->db->table($this->table)->where('id', $id)->get();
    }

    public function create($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update($id, $data)
    {
        return $this->db->table($this->table)->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->db->table($this->table)->where('id', $id)->delete();
    }
}
