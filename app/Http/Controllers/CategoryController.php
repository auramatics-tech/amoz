<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
  
    public function create_category()
    {
        return view('admin.categories.create_category');
    }
    public function category_list()
    {
        return view('admin.categories.category_list');
    }
}
