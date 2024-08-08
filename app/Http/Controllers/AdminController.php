<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index1()
    {
        return view('admin.dashboard');
        }
    public function post_page()
    {
        return view('admin.post');
        }
    
}
