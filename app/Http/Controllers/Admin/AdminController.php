<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loads;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function admin_profile_update(Request $request , User $user)
    {
        try {
            $user->update([
                'name' => $request->name,        
            ]);
            return redirect()->back()->with('update_success_message', 'تم تحديث الاسم  بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('update_error_message', 'خطأ ما الرجاء التأكد من صحة البيانات');
        }
    }

   
}

