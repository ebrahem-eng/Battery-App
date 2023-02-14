<?php

namespace App\Http\Controllers\Admin\Administrators;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class AdministratorController extends Controller
{
    public function index()
    {
        $administrators = User::all();
        return view('Admin/Administrators/index' , compact('administrators'));
    }

    public function create()
    {
        return view('Admin/Administrators/create');
    }

    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('admin.show.administrators')->with('store_success_message','تم اضافة المسؤول بنجاح');
    }

    public function edit(User $administrators)
    {

        return view('Admin/Administrators/edit' , compact('administrators'));
    }

    public function update(Request $request , User $administrators)
    {
        $administrators->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'email_verified_at' => now(),
        ]);

        return redirect()->route('admin.show.administrators')->with('update_success_message','تم تعديل بيانات المسؤول بنجاح');
    }

    public function destroy(User $administrators)
    {
      $administrators->delete();
      return redirect()->back()->with('delete_success_message', 'تم حذف المسؤول بنجاح');
    }

    public function archive()
    {
        $administrators = User::onlyTrashed()->get();
        return view('Admin/Administrators/Archive' , compact('administrators'));
    }

    public function restore($id)
    {
        User::withTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('restore_success_message', 'تم استعادة المسؤول بنجاح');
    }

    public function force_delete($id)
    {
        
            User::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()->with('delete_success_message', 'تم حذف المسؤول بنجاح');
    }

    public function show_permission()
    {
        $permissions = Permission::all();
        return view('Admin/Administrators/Show-Permission' , compact('permissions'));
    }

    public function show_reset_password()
    {
        $administrators = User::all();
        return view('Admin/Administrators/Reset-Password' , compact('administrators'));
    }

    public function edit_password(User $administrators)
    {
        return view('Admin/Administrators/edit-password' , compact('administrators'));
    }

    public function update_password(Request $request , User $administrators)
    {
        $administrators->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect()->route('admin.show.resetpassword.administrators')->with('update_success_message','تم تحديث كلمة المرور بنجاح');
    }
}
