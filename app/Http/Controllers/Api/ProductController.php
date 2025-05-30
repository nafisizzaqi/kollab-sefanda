<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return new ProductResource(true, 'List Data Products', $products);
    }
}
