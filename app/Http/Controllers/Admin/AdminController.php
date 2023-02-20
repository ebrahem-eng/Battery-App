<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loads;

class AdminController extends Controller
{
    public function index()
    {
        try{
 
            return view('Admin/index');
            
        }catch(\Exception $ex)
        {
            return redirect()->route('notfound');
        }
    
    }

   
}

