<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['iPhone' => 'Product 1', 'price' => 999.99],
            ['Samsung' => 'Product 2', 'price' => 899.99],
            ['Oppo' => 'Product 2', 'price' => 499.99],
            ['Xiaomi' => 'Product 2', 'price' => 399.99],
            ['Vivo' => 'Product 2', 'price' => 299.99],
            ['Redmi' => 'Product 2', 'price' => 199.99],
            ['ROG' => 'Product 2', 'price' => 1599.99],
            ['PC Set 1' => 'Product 2', 'price' => 499.99],
            ['PC Set 2' => 'Product 2', 'price' => 599.99],
            ['PC Set 3' => 'Product 2', 'price' => 699.99],
            ['Laptop 1' => 'Product 2', 'price' => 399.99],
            ['Laptop 2' => 'Product 2', 'price' => 499.99],
            ['Laptop 3' => 'Product 2', 'price' => 599.99],
            

        ];

        return view('products.index', compact('products'));
    }
}