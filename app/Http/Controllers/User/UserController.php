<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Loads;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Show_load_watt()
    {
        $loads = Loads::all();
        return view('welcome', ['loads' => $loads]);
    }

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
}
