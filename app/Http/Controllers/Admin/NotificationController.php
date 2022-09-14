<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NotificationRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {
        $notifications = auth()->user()->notifications;

        if ($request->ajax()) {
            $notifications = auth()->user()->notifications;

            return Datatables::of($notifications)
            ->editColumn('created_at',function(Notification $notification){
                return $notification->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('notification.edit',$data->id).'" class="badge badge-soft-success mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="badge badge-secondary delete mr-2 delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.notification.notification')->with('notifications',$notifications);

    }

    public function create()
    {
        return view('admin.pages.notification.notification_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $notification = New Notification;
        $notification->name = $request->name;
        $notification->save();

        return redirect()->route('notification.index')
        ->with([
            'message'    =>'Notification Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $notification = Notification::findOrFail($id);

        return response()->json($notification);
    }

    public function edit($id)
    {
        $notification = Notification::findOrFail($id);

        //return response()->json($notification);

        return view('admin.pages.notification.notification_edit',compact('notification'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $notification = Notification::findOrFail($id);
        $notification->name = $request->name;
        $notification->save();

        return redirect()->route('notification.index')
        ->with([
            'message'    =>'Notification Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $notification = Notification::destroy($id);

        if($notification){
            return redirect()->route('notification.index')
            ->with([
                'message'    =>'Notification Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
