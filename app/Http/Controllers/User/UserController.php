<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoadsRequest;
use App\Models\Loads;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class UserController extends Controller
{
    //عرض الاحمال في صفحة الاحمال 

    public function Show_load_watt()
    {
        try {
            $loads = Loads::all();
            return view('welcome', ['loads' => $loads]);
        } catch (\Exception $ex) {
            return redirect()->back()->with('error_message', 'خطا ما الرجاءاعادة المحاولة');
        }
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

                if ($watt_time > 1500) {
                    return view('User/Warning', compact('watt_time', 'sum_watt', 'time'));
                } else if ($watt_time > 24000) {

                    return redirect()->back()->with("error_max_watt_message", 'ان اقصى واط يمكن حسابه هو ٢٤٠٠٠ واط الرجاء التواصل معنا');
                } else {
                    return view('User/All_load', compact('watt_time'));
                }
            }
        } catch (\Exception $ex) {
            return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
        }
    }

    //عرض صفحة التحذير

    public function Calculate_watt_time_warning()
    {
        try {
            return view('User/Warning');
        } catch (\Exception $ex) {

            return redirect()->route('notfound');
        }
    }

    //التابع الخاص بزر المتابعة في صفحة التحذير
    public function Calculate_watt_time_continu(Request $request)
    {
        try {

            $watt_time = $request->input('load_warning');
            return view('User/All_load', compact('watt_time'));
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //عرض صفحة تعديل قيمة الحمل

    public function Calculate_watt_time_edit(Request $request)
    {
        try {

            $sum_watt = $request->input('sum_watt_warning');
            $time = $request->input('time_warning');
            return view('User/edit_Loads', compact('sum_watt', 'time'));
        } catch (\Exception $ex) {

            return redirect()->route('notfound');
        }
    }

    //تعديل قيمة الحمل

    public function update_loads(Request $request)
    {
        try {

            $sum_watt = $request->input('total-watt-edit');
            $time = $request->input('time_warning');

            if ($time == 0) {

                return redirect()->back()->with("error_null_number_message", 'الرجاء ادخال رقم');
            } elseif ($time < 0) {
                return redirect()->back()->with("error_minus_number_message", 'الرجاء ادخال رقم صحيح');
            } else {
                $watt_time = $sum_watt * $time;

                if ($watt_time > 1500) {
                    return view('User/Warning', compact('watt_time', 'sum_watt', 'time'));
                } else if ($watt_time > 24000) {

                    return redirect()->back()->with("error_max_watt_message", 'ان اقصى واط يمكن حسابه هو ٢٤٠٠٠ واط الرجاء التواصل معنا');
                } else {
                    return view('User/All_load', compact('watt_time'));
                }
            }
        } catch (\Exception $ex) {
            return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
        }
    }

    //عرض صفحة تعديل ساعات التشغيل

    public function Calculate_watt_time_edit_time(Request $request)
    {
        try {

            $sum_watt = $request->input('sum_watt_warning');
            $time = $request->input('time_warning');
            return view('User/edit_Time', compact('sum_watt', 'time'));
        } catch (\Exception $ex) {

            return redirect()->route('notfound');
        }
    }

    //تعديل ساعات التشغيل

    public function update_time(Request $request)
    {

        try {

            $sum_watt = $request->input('total-watt-edit-time');
            $time = $request->input('time_warning_edit');

            if ($time == 0) {

                return redirect()->back()->with("error_null_number_message", 'الرجاء ادخال رقم');
            } elseif ($time < 0) {
                return redirect()->back()->with("error_minus_number_message", 'الرجاء ادخال رقم صحيح');
            } else {
                $watt_time = $sum_watt * $time;

                if ($watt_time > 1500) {
                    return view('User/Warning', compact('watt_time', 'sum_watt', 'time'));
                } else if ($watt_time > 24000) {

                    return redirect()->back()->with("error_max_watt_message", 'ان اقصى واط يمكن حسابه هو ٢٤٠٠٠ واط الرجاء التواصل معنا');
                } else {
                    return view('User/All_load', compact('watt_time'));
                }
            }
        } catch (\Exception $ex) {
            return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
        }
    }
    //عرض صفحة الاحتمالات

    public function show_page_possibilities()
    {

        try {

            return view('User/Possibilities');
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //اظهار الاحتمال المناسب حسب الرقم الظاهر

    public function show_possibilities(Request $request)
    {
        try {
            $Total_load = $request->input('total-watt');

            if ($Total_load > 0 && $Total_load <= 4000) {

                return redirect()->route('show.page.possibilities')->with('one_Possibilities', 'success');
            } elseif ($Total_load > 4000 && $Total_load <= 8000) {

                return redirect()->route('show.page.possibilities')->with('two_Possibilities', 'success');
            } elseif ($Total_load > 8000 && $Total_load <= 12000) {

                return redirect()->route('show.page.possibilities')->with('three_Possibilities', 'success');
            } elseif ($Total_load > 12000 && $Total_load <= 16000) {

                return redirect()->route('show.page.possibilities')->with('fourth_Possibilities', 'success');
            } elseif ($Total_load > 16000 && $Total_load <= 20000) {

                return redirect()->route('show.page.possibilities')->with('five_Possibilities', 'success');
            } elseif ($Total_load > 20000 && $Total_load <= 24000) {

                return redirect()->route('show.page.possibilities')->with('six_Possibilities', 'success');
            } elseif ($Total_load > 24000) {

                return redirect()->back()->with('error_max_watt_message', 'ان اقصى واط يمكن حسابه هو ٢٤٠٠٠ واط الرجاء التواصل معنا');
            }
        } catch (\Exception) {

            return redirect()->route('notfound');
        }
    }

    // //اظهار صفحة جدول المنظومات المناسبة 

    // public function show_page_table_system()
    // {
    //     try {

    //         return view('User/System_Table');
    //     } catch (\Exception $ex) {
    //         return redirect()->route('notfound');
    //     }
    // }

    // //اظهار جدول المنظومات المناسبة للاحتمال الاول 

    // public function one_table_system()
    // {
    //     try {
    //         $one_table_system = System::whereIn('id', [1, 2])->get();
    //         return redirect()->route('show.page.table.system')->with(['one_table_systems' => $one_table_system, 'one_table_system' => 'success']);
    //     } catch (\Exception $ex) {
    //         return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
    //     }
    // }

    // //اظهار جدول المنظومات المناسبة للاحتمال الثاني

    // public function two_table_system()
    // {
    //     try {
    //         $two_table_system = System::whereIn('id', [1, 2, 3])->get();
    //         return redirect()->route('show.page.table.system')->with(['two_table_systems' => $two_table_system, 'two_table_system' => 'success']);
    //     } catch (\Exception $ex) {
    //         return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
    //     }
    // }

    // //اظهار جدول المنظومات المناسبة للاحتمال الثالث

    // public function three_table_system()
    // {
    //     try {
    //         $three_table_system = System::all();
    //         return redirect()->route('show.page.table.system')->with(['three_table_systems' => $three_table_system, 'three_table_system' => 'success']);
    //     } catch (\Exception $ex) {
    //         return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
    //     }
    // }
    // //اظهار جدول المنظومات المناسبة للاحتمال الرابع

    // public function fourth_table_system()
    // {
    //     try {
    //         $fourth_table_system = System::all();
    //         return redirect()->route('show.page.table.system')->with(['fourth_table_systems' => $fourth_table_system, 'fourth_table_system' => 'success']);
    //     } catch (\Exception $ex) {
    //         return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
    //     }
    // }

    // //اظهار جدول المنظومات المناسبة للاحتمال الخامس

    // public function five_table_system()
    // {
    //     try {
    //         $five_table_system = System::all();
    //         return redirect()->route('show.page.table.system')->with(['five_table_systems' => $five_table_system, 'five_table_system' => 'success']);
    //     } catch (\Exception $ex) {
    //         return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
    //     }
    // }

    // //اظهار جدول المنظومات المناسبة للاحتمال السادس

    // public function six_table_system()
    // {
    //     try {
    //         $six_table_system = System::all();
    //         return redirect()->route('show.page.table.system')->with(['six_table_systems' => $six_table_system, 'six_table_system' => 'success']);
    //     } catch (\Exception $ex) {
    //         return redirect()->back()->with("error_message", 'خطا ما الرجاءاعادة المحاولة');
    //     }
    // }

    //عرض صفحة تفاصيل الاقتراحات
    public function show_page_details_system()
    {
        try {
            return view('User/details_System');
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الاول من الاحتمال الاول 

    public function one_possibilities_one_choice()
    {
        try {

            $one_possibilities_one_choice = System::where('name', 'المنظومة الاولى')->get();
            return redirect()->route('show.page.details.system')->with(['one_possibilities_one_choice' => $one_possibilities_one_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثاني من الاحتمال الاول

    public function one_possibilities_two_choice()
    {
        try {

            $one_possibilities_two_choice = System::where('name', 'المنظومة الثانية')->get();
            return redirect()->route('show.page.details.system')->with(['one_possibilities_two_choice' => $one_possibilities_two_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الاول من الاحتمال الثاني

    public function two_possibilities_one_choice()
    {
        try {

            $two_possibilities_one_choice = System::where('name', 'المنظومة الاولى')->get();
            return redirect()->route('show.page.details.system')->with(['two_possibilities_one_choice' => $two_possibilities_one_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثاني من الاحتمال الثاني

    public function two_possibilities_two_choice()
    {
        try {

            $two_possibilities_two_choice = System::where('name', 'المنظومة الثانية')->get();
            return redirect()->route('show.page.details.system')->with(['two_possibilities_two_choice' => $two_possibilities_two_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثالث من الاحتمال الثاني 

    public function two_possibilities_three_choice()
    {
        try {
            $two_possibilities_three_choice = System::where('name', 'المنظومة الثالثة')->get();
            return redirect()->route('show.page.details.system')->with(['two_possibilities_three_choice' => $two_possibilities_three_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }


    //الاقتراح الرابع من الاحتمال الثاني

    public function two_possibilities_four_choice()
    {
        try {
            $two_possibilities_four_choice = System::whereIn('name', ['المنظومة الثانية', 'المنظومة الاولى'])->get();
            return redirect()->route('show.page.details.system')->with(['two_possibilities_four_choice' => $two_possibilities_four_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الاول من الاحتمال الثالث

    public function three_possibilities_one_choice()
    {
        try {
            $three_possibilities_one_choice = System::whereIn('name', ['المنظومة الثالثة', 'المنظومة الاولى'])->get();
            return redirect()->route('show.page.details.system')->with(['three_possibilities_one_choice' => $three_possibilities_one_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثاني من الاحتمال الثالث 

    public function three_possibilities_two_choice()
    {
        try {
            $three_possibilities_two_choice = System::whereIn('name', ['المنظومة الثالثة', 'المنظومة الثانية'])->get();
            return redirect()->route('show.page.details.system')->with(['three_possibilities_two_choice' => $three_possibilities_two_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثالث من الاحتمال الثالث

    public function three_possibilities_three_choice()
    {
        try {
            $three_possibilities_three_choice = System::where('name', 'المنظومة الرابعة')->get();
            return redirect()->route('show.page.details.system')->with(['three_possibilities_three_choice' => $three_possibilities_three_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الرابع من الاحتمال الثالث 

    public function three_possibilities_four_choice()
    {
        try {
            $one_possibilities_one_choice = System::where('name', 'المنظومة الاولى')->get();
            return redirect()->route('show.page.details.system')->with(['one_possibilities_one_choice' => $one_possibilities_one_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الخامس من الاحتمال الثالث
    public function three_possibilities_five_choice()
    {
        try {
            $one_possibilities_two_choice = System::where('name', 'المنظومة الثانية')->get();
            return redirect()->route('show.page.details.system')->with(['one_possibilities_two_choice' => $one_possibilities_two_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح السادس من الاحتمال الثالث 

    public function three_possibilities_six_choice()
    {
        try {
            $two_possibilities_four_choice = System::whereIn('name', ['المنظومة الثانية', 'المنظومة الاولى'])->get();
            return redirect()->route('show.page.details.system')->with(['two_possibilities_four_choice' => $two_possibilities_four_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح السابع من الاحتمال الثالث

    public function three_possibilities_seven_choice()
    {
        try {
            $two_possibilities_four_choice = System::whereIn('name', ['المنظومة الثانية', 'المنظومة الاولى'])->get();
            return redirect()->route('show.page.details.system')->with(['two_possibilities_four_choice' => $two_possibilities_four_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الاول من الاحتمال الرابع
    public function four_possibilities_one_choice()
    {
        try {
            $four_possibilities_one_choice = System::whereIn('name', ['المنظومة الرابعة', 'المنظومة الاولى'])->get();
            return redirect()->route('show.page.details.system')->with(['four_possibilities_one_choice' => $four_possibilities_one_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثاني من الاحتمال الرابع

    public function four_possibilities_two_choice()
    {
        try {
            $four_possibilities_two_choice = System::whereIn('name', ['المنظومة الرابعة', 'المنظومة الثانية'])->get();
            return redirect()->route('show.page.details.system')->with(['four_possibilities_two_choice' => $four_possibilities_two_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثالث من الاحتمال الرابع
    public function four_possibilities_three_choice()
    {
        try {
            $four_possibilities_three_choice = System::whereIn('name', ['المنظومة الثالثة', 'المنظومة الثانية', 'المنظومة الاولى'])->get();
            return redirect()->route('show.page.details.system')->with(['four_possibilities_three_choice' => $four_possibilities_three_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }


    //الاقتراح الاول من الاحتمال الخامس

    public function five_possibilities_one_choice()
    {
        try {
            $five_possibilities_one_choice = System::whereIn('name', ['المنظومة الرابعة', 'المنظومة الثالثة'])->get();
            return redirect()->route('show.page.details.system')->with(['five_possibilities_one_choice' => $five_possibilities_one_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثاني من الاحتمال الخامس

    public function five_possibilities_two_choice()
    {

        try {
            $five_possibilities_two_choice = System::whereIn('name', ['المنظومة الرابعة', 'المنظومة الثانية', 'المنظومة الاولى'])->get();
            return redirect()->route('show.page.details.system')->with(['five_possibilities_two_choice' => $five_possibilities_two_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثاني من الاحتمال السادس 

    public function six_possibilities_two_choice()
    {
        try {
            $six_possibilities_two_choice = System::whereIn('name', ['المنظومة الرابعة', 'المنظومة الثالثة', 'المنظومة الاولى'])->get();
            return redirect()->route('show.page.details.system')->with(['six_possibilities_two_choice' => $six_possibilities_two_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }

    //الاقتراح الثالث من الاحتمال السادس
    public function six_possibilities_three_choice()
    {
        try {
            $six_possibilities_three_choice = System::whereIn('name', ['المنظومة الرابعة', 'المنظومة الثالثة', 'المنظومة الثانية'])->get();
            return redirect()->route('show.page.details.system')->with(['six_possibilities_three_choice' => $six_possibilities_three_choice, 'status' => 'success']);
        } catch (\Exception $ex) {
            return redirect()->route('notfound');
        }
    }
}
