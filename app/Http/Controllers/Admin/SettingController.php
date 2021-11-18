<?php

namespace App\Http\Controllers\Admin;



use App\Models\Setting;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Services\Setting\Settings;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    //protected $settings = [];


    public function __construct(){

        // $settings = Cache::remember('settings', 24*60, function() {
        //     return \App\Models\Setting::all()->toArray();
        // });
        // $this->settings = array_pluck($settings, 'value', 'key');
    }
    // public function index(Request $request)
    // {

    //     //dd($this->settings["app_name"]);
    //     return view('admin.pages.setting.setting')->with("settings",$this->settings);


    // }
    public function index(Request $request,Settings $settings)
    {

        //dd($settings->get('name'));
        dd($settings->all());

        //return Setting::get();
        return view('admin.pages.setting.setting');

    }

    // public function create()
    // {
    //     return view('admin.pages.setting.setting');
    // }

    // public function store(Request $request,Settings $setting)
    // {
    //     //General setting
    //     if($request->type == 'global'){
    //         $setting->set('global',$request->name,$request->description);

    //     }

    //     // $validate = $request->validate([
    //     //     'name' => 'required'
    //     // ]);

    //     // $setting = New Setting;
    //     // $setting->name = $request->name;
    //     // $setting->save();

    //     // return redirect()->route('setting.index')
    //     // ->with([
    //     //     'message'    =>'Setting Saved Successfully',
    //     //     'alert-type' => 'success',
    //     // ]);

    // }

    // public function show($id)
    // {
    //     $setting = Setting::findOrFail($id);

    //     return response()->json($setting);
    // }

    // public function edit($id)
    // {
    //     $setting = Setting::findOrFail($id);

    //     //return response()->json($setting);

    //     return view('admin.pages.setting.setting_edit',compact('setting'));
    // }

    // public function update(Request $request, $id)
    // {

    //     $validate = $request->validate([
    //         'name' => 'required'
    //     ]);

    //     $setting = Setting::findOrFail($id);
    //     $setting->name = $request->name;
    //     $setting->save();

    //     return redirect()->route('setting.index')
    //     ->with([
    //         'message'    =>'Setting Updated Successfully',
    //         'alert-type' => 'success',
    //     ]);


    // }

    // public function destroy($id)
    // {
    //     $setting = Setting::destroy($id);

    //     if($setting){
    //         return redirect()->route('setting.index')
    //         ->with([
    //             'message'    =>'Setting Updated Successfully',
    //             'alert-type' => 'success',
    //         ]);
    //     }else{

    //     }

    // }
}
