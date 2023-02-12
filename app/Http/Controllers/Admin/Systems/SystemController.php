<?php

namespace App\Http\Controllers\Admin\Systems;

use App\Http\Controllers\Controller;
use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        $systems = System::all();
        return view('Admin/Systems/index' , compact('systems'));
    }

    public function create()
    {
        return view('Admin/Systems/create');
    }

    public function store(Request $request)
    {
       System::create([
        'name'=>$request->name,
        'number_battery'=>$request->number_battery,
        'number_inverters'=>$request->number_inverters,
        'watt_inverters'=>$request->watt_inverters,
        'watt_battery'=>$request->watt_battery,
        'Number_hours_for_charge'=>$request->Number_hours_for_charge,
        'details'=>$request->details,
       ]);
       return redirect()->route('admin.show.systems')->with('store_success_message', 'تم اضافة المنظومة بنجاح');
    }

    public function edit(System $systems)
    {
        return view('Admin/Systems/edit' , compact('systems'));
    }

    public function update(Request $request , System $systems)
    {
      $systems->update([
        'name'=>$request->name,
        'number_battery'=>$request->number_battery,
        'number_inverters'=>$request->number_inverters,
        'watt_inverters'=>$request->watt_inverters,
        'watt_battery'=>$request->watt_battery,
        'Number_hours_for_charge'=>$request->Number_hours_for_charge,
        'details'=>$request->details,
      ]);

      return redirect()->route('admin.show.systems')->with('update_success_message', 'تم تحديث بيانات المنظومة بنجاح');
    }

    public function destroy(System $systems)
    {
        $systems->delete();
        return redirect()->back()->with('delete_success_message', 'تم حذف المنظومة بنجاح');
    }

    public function archive()
    {
        $systems = System::onlyTrashed()->get();
        return view('Admin/Systems/Archive' , compact('systems'));

    }

}
