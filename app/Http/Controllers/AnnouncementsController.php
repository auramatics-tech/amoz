<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function announcements_index()
    {
        return view('admin.announcements.announcements');
    }
    public function manage_announcements()
    {
        return view('admin.announcements.manage_announcements');
    }
}
