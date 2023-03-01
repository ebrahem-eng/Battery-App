<?php

namespace App\Http\Controllers\Admin\Complaints;

use App\Http\Controllers\Controller;
use App\Models\Complaints;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function index()
    {
        try {

            $complaints = Complaints::all();
            return view('Admin/Contact_Us/index', compact('complaints'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    public function destroy(Complaints $complaints)
    {
        try {
            $complaints->delete();
            return redirect()->back()->with('delete_success_message', 'تم حذف الشكوى بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('delete_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }
}
