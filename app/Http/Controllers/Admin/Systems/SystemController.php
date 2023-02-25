<?php

namespace App\Http\Controllers\Admin\Systems;

use App\Http\Controllers\Controller;
use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    //عرض جدول المنظومات

    public function index()
    {
        try {

            $systems = System::all();
            return view('Admin/Systems/index', compact('systems'));
        } catch (\Exception $ex) {

            return redirect()->route('notfound');
        }
    }

    //عرض صفحة اضافة منظومة

    public function create()
    {
        try {
            return view('Admin/Systems/create');
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //تخزين المنظومات في قاعدة البيانات

    public function store(Request $request)
    {
        try {
            System::create([
                'name' => $request->name,
                'number_battery' => $request->number_battery,
                'number_inverters' => $request->number_inverters,
                'watt_inverters' => $request->watt_inverters,
                'watt_battery' => $request->watt_battery,
                'Number_hours_for_charge' => $request->Number_hours_for_charge,
                'price_number' => $request->price_number,
                'price_write' => $request->price_write,
                'details' => $request->details,
            ]);
            return redirect()->route('admin.show.systems')->with('store_success_message', 'تم اضافة المنظومة بنجاح');
        } catch (\Exception $ex) {

            return redirect()->back()->with('store_error_message', 'خطأ ما الرجاء التأكد من صحة البيانات');
        }
    }

    //عرض صفحة تعديل المنظومات

    public function edit(System $systems)
    {
        try {
            return view('Admin/Systems/edit', compact('systems'));
        } catch (\Exception $ex) {

            return redirect()->route('notfound');
        }
    }

    //تخزين المنظومات بعد تعديلها في قاعدة البيانات 

    public function update(Request $request, System $systems)
    {
        try {
            $systems->update([
                'name' => $request->name,
                'number_battery' => $request->number_battery,
                'number_inverters' => $request->number_inverters,
                'watt_inverters' => $request->watt_inverters,
                'watt_battery' => $request->watt_battery,
                'Number_hours_for_charge' => $request->Number_hours_for_charge,
                'price_number' => $request->price_number,
                'price_write' => $request->price_write,
                'details' => $request->details,
            ]);
            return redirect()->route('admin.show.systems')->with('update_success_message', 'تم تحديث بيانات المنظومة بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('update_error_message', 'خطأ ما الرجاء التأكد من صحة البيانات');
        }
    }

    //حذف المنظومات الى الارشيف

    public function destroy(System $systems)
    {
        try {
            $systems->delete();
            return redirect()->back()->with('delete_success_message', 'تم حذف المنظومة بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('delete_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }

    //عرض جدول الارشيف

    public function archive()
    {
        try {
            $systems = System::onlyTrashed()->get();
            return view('Admin/Systems/Archive', compact('systems'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //استعادة المنظومات المحذوفة

    public function restore($id)
    {
        try {
            System::withTrashed()->where('id', $id)->restore();
            return redirect()->back()->with('restore_success_message', 'تم استعادة المنظومة بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('restore_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }

    //حذف المنظومات نهائيا من قاعدة البيانات

    public function force_delete($id)
    {
        try {
            System::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()->with('delete_success_message', 'تم حذف المنظومة بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('delete_error_message', 'خطأ ما يرجى اعادة المحاولة');
        }
    }
}
