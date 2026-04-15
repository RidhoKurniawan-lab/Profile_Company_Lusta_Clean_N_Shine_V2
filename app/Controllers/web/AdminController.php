<?php

require_once CORE_PATH . '/Auth.php';

class AdminController extends Controller
{

    public function __construct()
    {

        Auth::requireWebLogin();
    }

    public function index()
    {
        $this->view('admin/index', ['title' => 'Dasboard'], 'admin');
    }

    public function product()
    {
        $this->view('admin/product/product', ['title' => 'Product'], 'admin');
    }

    public function addProduct()
    {
        $this->view('admin/product/add_product', ['title' => 'Add Product'], 'admin');
    }

    public function editProduct()
    {
        $this->view('admin/product/edit_product', ['title' => 'Edit Product'], 'admin');
    }

    public function linkProduct()
    {
        $this->view('admin/product/link_product', ['title' => 'Link Product'], 'admin');
    }

    
}
