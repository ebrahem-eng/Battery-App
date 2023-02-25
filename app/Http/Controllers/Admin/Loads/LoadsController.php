<?php

namespace App\Http\Controllers\Admin\Loads;

use App\Http\Controllers\Controller;
use App\Models\Loads;
use Illuminate\Http\Request;

class LoadsController extends Controller
{
    //عرض جدول الاحمال

    public function index()
    {
        try {
            $loads = Loads::all();
            return view('Admin/Loads/index', compact('loads'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //عرض صفحة اضافة حمل

    public function create()
    {
        try {
            return view('Admin/Loads/create');
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //تخزين الاحمال الجديدة في قاعدة البيانات

    public function store(Request $request)
    {
        try {
            Loads::create([
                'name' => $request->name,
                'value' => $request->value,
                'number' => $request->number,
            ]);
            return redirect()->route('admin.show.loads')->with('store_success_message', 'تم اضافة الحمل بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('store_error_message', 'خطأ ما الرجاء التأكد من صحة البيانات');
        }
    }

    //حذف الاحمال ونقلها الى الارشيف

    public function destroy(Loads $loads)
    {

        try {
            $loads->delete();
            return redirect()->back()->with('delete_success_message', 'تم حذف الحمل بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('delete_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }

    //عرض جدول الارشيف

    public function archive()
    {
        try {
            $loads_trashed = Loads::onlyTrashed()->get();
            return view('Admin/Loads/Archive', compact('loads_trashed'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //حذف الاحمال نهائيا من قاعدة البيانات 

    public function force_delete($id)
    {
        try {
            Loads::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()->with('delete_success_message', 'تم حذف الحمل بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('delete_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }

    //استعادة الاحمال المحذوفة 

    public function restore($id)
    {
        try {
            Loads::withTrashed()->where('id', $id)->restore();
            return redirect()->back()->with('restore_success_message', 'تم استعادة الحمل بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('restore_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }

    //عرض صفحة تعديل الاحمال

    public function edit(Loads $loads)
    {
        try {

            return view('Admin/Loads/edit', compact('loads'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //تعديل الاحمال في قاعدة البيانات

    public function update(Request $request, Loads $loads)
    {
        try {
            $loads->update([
                'name' => $request->name,
                'value' => $request->value,
                'number' => $request->number,
            ]);
            return redirect()->route('admin.show.loads')->with('update_success_message', 'تم تحديث بيانات الحمل بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('update_error_message', 'خطأ ما الرجاء التأكد من صحة البيانات');
        }
    }
}
