<?php

namespace App\Http\Controllers\Admin\User_Information;

use App\Http\Controllers\Controller;
use App\Models\User_Information;
use Illuminate\Http\Request;

class User_InformationController extends Controller
{
    //عرض صفحة معلومات الزبائن

    public function index()
    {
        try {

            $users = User_Information::all();
            return view('Admin/User_Information/index', compact('users'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }


    //حذف معلومات زبون ونقله الى الارشيف

    public function destroy(User_Information $user_Information)
    {
        try {
            $user_Information->delete();
            return redirect()->back()->with('delete_success_message', 'تم حذف معلومات الزبون بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('delete_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }


    //عرض صفحة الارشيف

    public function archive()
    {
        try {
            $users = User_Information::onlyTrashed()->get();
            return view('Admin/User_Information/Archive', compact('users'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //استعادة معلومات الزبون

    public function restore($id)
    {
        try {
            User_Information::withTrashed()->where('id', $id)->restore();
            return redirect()->back()->with('restore_success_message', 'تم استعادة معلومات الزبون بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('restore_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }

    //حذف معلومات الزبائن بشكل نهائي

    public function force_delete($id)
    {
        try {
            User_Information::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()->with('delete_success_message', 'تم حذف معلومات الزبون بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('delete_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }
}
