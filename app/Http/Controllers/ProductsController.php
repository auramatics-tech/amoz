<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
  
    public function product_list()
    {
        return view('admin.products.product_list');
    }
    public function create_product()
    {
        return view('admin.products.create_product');
    }
    public function create_category()
    {
        return view('admin.products.create_category');
    }
}
