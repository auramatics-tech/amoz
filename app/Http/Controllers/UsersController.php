<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  
    public function user_list()
    {
        return view('admin.users.user_list');
    }
    public function user_details()
    {
        return view('admin.users.user');
    }
}
