<?php

namespace App\Http\Controllers\Admin\Loads;

use App\Http\Controllers\Controller;
use App\Models\Loads;
use Illuminate\Http\Request;

class LoadsController extends Controller
{
    public function index()
    {
        $loads = Loads::all();
        return view('Admin/Loads/index',compact('loads'));
    }

    public function create()
    {
       return view('Admin/Loads/create');
    }

    public function store(Request $request)
    {
        try{
            Loads::create([
                'name' => $request->name,
                'value' => $request->value,
            ]);
            return redirect()->route('admin.show.loads')->with('store_success_message','تم اضافة الحمل بنجاح');
    
        }catch(\Exception $ex)
        {
            return redirect()->back()->with('store_error_message','خطأ ما الرجاء التأكد من صحة البيانات');
        }
       
    }

    public function destroy(Loads $loads)
    {
      
       try{
        $loads->delete();
        return redirect()->back()->with('delete_success_message','تم حذف الحمل بنجاح');

       }catch(\Exception $ex)
       {
         return redirect()->back()->with('delete_error_message','خطأ ما يرجى اعادة المحاولة');
       }
    }

    public function archive()
    {
        $loads_trashed = Loads::onlyTrashed()->get();
        return view('Admin/Loads/Archive',compact('loads_trashed'));
    }

    public function force_delete($id)
    {
        try{
            Loads::withTrashed()->where('id',$id)->forceDelete();
            return redirect()->back()->with('delete_success_message','تم حذف الحمل بنجاح');

        }catch(\Exception $ex)
        {
            return redirect()->back()->with('delete_error_message','خطأ ما يرجى اعادة المحاولة');
        }
      
    }

    public function restore($id)
    {
        try{
            Loads::withTrashed()->where('id',$id)->restore();
            return redirect()->back()->with('restore_success_message','تم استعادة الحمل بنجاح');

        }catch(\Exception $ex)
        {
            return redirect()->back()->with('restore_error_message','خطأ ما يرجى اعادة المحاولة');
        }
      
    }

    public function edit(Loads $loads)
    {
        return view('Admin/Loads/edit' , compact('loads'));
    }

    public function update(Request $request ,Loads $loads)
    {
        try
        {
            $loads->update([
                'name'=> $request->name,
                'value'=> $request->value,
             ]);
             return redirect()->route('admin.show.loads')->with('update_success_message','تم تحديث بيانات الحمل بنجاح');

        }catch(\Exception $ex)
        {
            return redirect()->back()->with('update_error_message','خطأ ما الرجاء التأكد من صحة البيانات');
        }

    }
}
