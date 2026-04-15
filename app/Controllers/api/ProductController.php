<?php

class ProductController extends Controller
{
    public function index() {
        $this->json([
            'status' => 200,
        ]);
    }
}