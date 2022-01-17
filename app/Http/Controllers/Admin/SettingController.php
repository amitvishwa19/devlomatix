<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    //protected $settings = [];


    public function __construct(){

    }

    public function index(Request $request)
    {
        \AppSetting::get('app_name');

        //dd($settings->get('name'));
        //dd($settings->all());

        //return Setting::get();
        //Setting::set('app_name','devlomatix2');
        return view('admin.pages.setting.setting');

    }

    // public function create()
    // {
    //     return view('admin.pages.setting.setting');
    // }

    public function store(Request $request)
    {
        //Setting::set('app_name','devlomatix2');

        // if($request->app_name){
        //     //dd('app name is there');
        //     Setting::set('app_name',$request->app_name);
        // }else{
        //     dd('app name is not there');
        // }
        //dd($request->app_name);
        //dd($request->all());
        //General setting
        // if($request->type == 'global'){
        //     //$setting->set('global','app_name',$request->name);
        //     //$setting->set('global','app_description',$request->description);

        //     Setting::set('app_name',$request->name);
        //     Setting::set('app_description',$request->description);
        // }
        if($request->app_name){
            \AppSetting::set('app_name',$request->app_name);
        }
        if($request->app_description){
            \AppSetting::set('app_description',$request->app_description);
        }


        return redirect()->route('setting.index')
        ->with([
            'message'    =>'Setting Saved Successfully',
            'alert-type' => 'success',
        ]);

    }

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
