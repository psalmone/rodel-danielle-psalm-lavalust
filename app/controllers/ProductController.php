<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('Product');
    }

    // READ — list all products
    public function index()
    {
        $data['products'] = $this->Product->getAll();
        $this->call->view('products', $data);
    }

    // CREATE — show form
    public function create()
    {
        $this->call->view('product_create');
    }

    // CREATE — save
    public function store()
    {
        $this->Product->create([
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity'],
        ]);
        redirect(site_url('products'));
        exit;
    }

    // UPDATE — show form
    public function edit($id)
    {
        $data['product'] = $this->Product->getById($id);
        if (!$data['product']) {
            redirect(site_url('products'));
            exit;
        }
        $this->call->view('product_edit', $data);
    }

    // UPDATE — save
    public function update($id)
    {
        $this->Product->update($id, [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity'],
        ]);
        redirect(site_url('products'));
        exit;
    }

    // DELETE
    public function destroy($id)
    {
        $this->Product->delete($id);
        redirect(site_url('products'));
        exit;
    }
}
