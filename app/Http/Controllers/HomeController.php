<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
class HomeController extends Controller
{
      

    
    public function index()
    {
       return view('admin.dashboard');
} 
  

}