<?php

namespace App\Http\Controllers\Admin\Administrators;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class AdministratorController extends Controller
{
    //عرض جدول المسؤولين 

    public function index()
    {
        try {

            $administrators = User::all();
            return view('Admin/Administrators/index', compact('administrators'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //عرض صفحة اضافة مسؤول

    public function create()
    {
        try {

            return view('Admin/Administrators/create');
        } catch (\Exception $ex) {

            return redirect()->route('notfound');
        }
    }

    //تخزين المسؤول في قاعدة البيانات 

    public function store(Request $request)
    {
        try {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'email_verified_at' => now(),
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('admin.show.administrators')->with('store_success_message', 'تم اضافة المسؤول بنجاح');
        } catch (\Exception $ex) {

            return redirect()->back()->with('store_error_message', 'خطأ ما الرجاء التأكد من صحة البيانات');
        }
    }

    //عرض صفحة تعديل المسؤول

    public function edit(User $administrators)
    {

        try {
            return view('Admin/Administrators/edit', compact('administrators'));
        } catch (\Exception $ex) {

            return redirect()->route('notfound');
        }
    }

    //تخزين التعديل في قاعدة البيانات

    public function update(Request $request, User $administrators)
    {
        try {

            $administrators->update([
                'name' => $request->name,
                'email' => $request->email,
                'email_verified_at' => now(),
            ]);

            return redirect()->route('admin.show.administrators')->with('update_success_message', 'تم تعديل بيانات المسؤول بنجاح');
        } catch (\Exception $ex) {

            return redirect()->back()->with('update_error_message', 'خطأ ما الرجاء التأكد من صحة البيانات');
        }
    }

    //حذف المسؤول

    public function destroy(User $administrators)
    {
        try {

            $administrators->delete();
            return redirect()->back()->with('delete_success_message', 'تم حذف المسؤول بنجاح');
        } catch (\Exception $ex) {

            return redirect()->back()->with('delete_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }
    //عرض صفحة الارشيف 

    public function archive()
    {
        try {

            $administrators = User::onlyTrashed()->get();
            return view('Admin/Administrators/Archive', compact('administrators'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }
    //استعادة المسؤول بعد الحذف

    public function restore($id)
    {
        try {
            User::withTrashed()->where('id', $id)->restore();
            return redirect()->back()->with('restore_success_message', 'تم استعادة المسؤول بنجاح');
        } catch (\Exception $ex) {

            return redirect()->back()->with('restore_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }

    //حذف المسؤول نهائيا

    public function force_delete($id)
    {
        try {

            User::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()->with('delete_success_message', 'تم حذف المسؤول بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('delete_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }

    //عرض صفحة الصلاحيات

    public function show_permission()
    {
        try {

            $permissions = Permission::all();
            return view('Admin/Administrators/Show-Permission', compact('permissions'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //عرض صفحة اعادة تعيين كلمة المرور

    public function show_reset_password()
    {
        try {

            $administrators = User::all();
            return view('Admin/Administrators/Reset-Password', compact('administrators'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //عرض صفحة كتابة كلمة المرور الجديدة

    public function edit_password(User $administrators)
    {
        try {

            return view('Admin/Administrators/edit-password', compact('administrators'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //تخزين كلمة المرور الجديدة في قاعدة البيانات

    public function update_password(Request $request, User $administrators)
    {
        try {

            $administrators->update([
                'password' => Hash::make($request->new_password)
            ]);
            return redirect()->route('admin.show.resetpassword.administrators')->with('update_success_message', 'تم تحديث كلمة المرور بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('update_error_message', 'خطأ ما الرجاء التأكد من صحة البيانات');
        }
    }

    //عرض صفحة صلاحيات المسؤول 

    public function show_administrators_permissions(User $administrators)
    {
        try {
            $permissions = Permission::all();
            return view('Admin/Administrators/give-permission', compact('administrators', 'permissions'));
        } catch (\Exception $ex) {

            return redirect()->route('notfound');
        }
    }

    //اعطاء صلاحية للمسؤول

    public function givepermission(Request $request, User $administrators)
    {
        if ($administrators->hasPermissionTo($request->permission)) {
            return back()->with('giv_error_message', 'الصلاحية موجودة بالفعل عند هذا المسؤول');
        }
        $administrators->givePermissionTo($request->permission);
        return back()->with('give_success_message', 'تم اعطاء الصلاحية بنجاح');
    }

    //سحب صلاحية من المسؤول

    public function revokepermission(User $administrators, Permission $permission)
    {
        if ($administrators->hasPermissionTo($permission)) {
            $administrators->revokePermissionTo($permission);
            return back()->with('revoke_success_message', 'تم سحب الصلاحية بنجاح');
        }

        return back()->with('revoke_error_message', 'الصلاحية غير موجودة');
    }
}
