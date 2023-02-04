<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Loads;
use App\Models\System;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //عرض الاحمال في صفحة الاحمال 

    public function Show_load_watt()
    {
        $loads = Loads::all();
        return view('welcome', ['loads' => $loads]);
    }

    //حساب مجموع الواط في الساعة الواحدة للاحمال المحددة فقط 

    public function Calculate_Sum_Watting(Request $request)
    {

        try {
            $selected = $request->input('selected');
            $values = $request->input('value');
            $sum = 0;

            foreach ($selected as $id => $isSelected) {
                if ($isSelected) {
                    $sum += $values[$id];
                }
            }

            return view('User/Time', compact('sum'));
        } catch (\Exception $ex) {
            return redirect()->back()->with('error_message', 'خطا ما الرجاءاعادة المحاولة');
        }
    }

    //حساب الحمل النهائي مع الوقت المقدر للتشغيل

    public function Calculate_watt_time(Request $request)
    {
        try {

            $sum_watt = $request->input('total-watt');
            $time = $request->input('time');

            if ($time == 0) {
                return redirect()->back()->with("error_null_number_message", 'الرجاء ادخال رقم');
            } elseif ($time < 0) {
                return redirect()->back()->with("error_minus_number_message", 'الرجاء ادخال رقم صحيح');
            } else {
                $watt_time = $sum_watt * $time;
                return view('User/All_load', compact('watt_time'));
            }
        } catch (\Exception $ex) {
            return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
        }
    }

    //عرض صفحة الاحتمالات

    public function show_page_possibilities()
    {

        return view('User/Possibilities');
    }

    //اظهار الاحتمال المناسب حسب الرقم الظاهر

    public function show_possibilities(Request $request)
    {
        $Total_load = $request->input('total-watt');

        if ($Total_load > 0 && $Total_load <= 4000) {

            return redirect()->route('show.page.possibilities')->with('one_Possibilities', 'success');
        } elseif ($Total_load > 4000 && $Total_load <= 8000) {

            return redirect()->route('show.page.possibilities')->with('two_Possibilities', 'success');
        } elseif ($Total_load > 8000 && $Total_load <= 12000) {
            return redirect()->route('show.page.possibilities')->with('three_Possibilities', 'success');
        }
    }

    //اظهار صفحة جدول المنظومات المناسبة 

    public function show_page_table_system()
    {
        return view('User/System_Table');
    }

    //اظهار جدول المنظومات المناسبة للاحتمال الاول 

    public function one_table_system()
    {
        $one_table_system = System::whereIn('id', [1, 2])->get();
        return redirect()->route('show.page.table.system')->with(['one_table_systems' => $one_table_system, 'one_table_system' => 'success']);
    }

    //اظهار جدول المنظومات المناسبة للاحتمال الثاني

    public function two_table_system()
    {
        $two_table_system = System::whereIn('id', [1, 2, 3])->get();
        return redirect()->route('show.page.table.system')->with(['two_table_systems' => $two_table_system, 'two_table_system' => 'success']);
    }

    //اظهار جدول المنظومات المناسبة للاحتمال الثالث

    public function three_table_system()
    {
        $three_table_system = System::all();
        return redirect()->route('show.page.table.system')->with(['three_table_systems' => $three_table_system, 'three_table_system' => 'success']);
    }
}
