<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loads;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin/index');
    }

   
}

