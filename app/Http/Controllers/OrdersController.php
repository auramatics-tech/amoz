<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
  
    public function create_order()
    {
        return view('admin.orders.create_order');
    }
    public function order_list()
    {
        return view('admin.orders.order_list');
    }
}
