/ ProductController.php
<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Product 1', 'price' => 19.99],
            ['name' => 'Product 2', 'price' => 29.99],
            // Add more products as needed
        ];

        return view('products.index', compact('products'));
    }
}