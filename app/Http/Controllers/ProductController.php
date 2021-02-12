<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view("products.product", compact("product"));
    }
}
