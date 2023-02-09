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
        Loads::create([
            'name' => $request->name,
            'value' => $request->value,
        ]);
        return redirect()->route('admin.show.loads')->with('store_success_message','تم اضافة الحمل بنجاح');

    }

    public function destroy(Loads $loads)
    {
       $loads->delete();
       return redirect()->back()->with('delete_success_message','تم حذف الحمل بنجاح');
    }

    public function archive()
    {
        $loads_trashed = Loads::onlyTrashed()->get();
        return view('Admin/Loads/Archive',compact('loads_trashed'));
    }

    public function force_delete($id)
    {
        Loads::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back()->with('delete_success_message','تم حذف الحمل بنجاح');
    }

    public function restore($id)
    {
       Loads::withTrashed()->where('id',$id)->restore();
       return redirect()->back()->with('restore_success_message','تم استعادة الحمل بنجاح');
    }
}
