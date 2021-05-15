<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubscriptionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $subscriptions = Subscription::orderby('created_at','desc')->latest('id');

            return Datatables::of($subscriptions)
            ->editColumn('created_at',function(Subscription $subscription){
                return $subscription->created_at->diffForHumans();
            })
            ->addColumn('status',function(Subscription $subscription){
                if($subscription->status == true){
                    return '<a href="'.route('subscribe.edit',$subscription->id).'" class="badge badge-soft-success"><small>Active</small></a>';
                }else{
                    return '<a href="'.route('subscribe.edit',$subscription->id).'" class="badge badge-soft-dark"><small>InActive</small></a>';
                }
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('subscribe.edit',$data->id).'" class="badge badge-soft-primary mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="badge badge-soft-danger delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action','status'])
            ->make(true);


        }


        return view('admin.pages.subscription.subscription');

    }

    public function create()
    {
        return view('admin.pages.subscription.subscription_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required'
        ]);

        $subscription = New Subscription;
        $subscription->email = $request->email;
        $subscription->save();

        return redirect()->route('subscribe.index')
        ->with([
            'message'    =>'Subscription Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $subscription = Subscription::findOrFail($id);

        return response()->json($subscription);
    }

    public function edit($id)
    {
        $subscription = Subscription::findOrFail($id);

        //return response()->json($subscription);

        return view('admin.pages.subscription.subscription_edit',compact('subscription'));
    }

    public function update(Request $request, $id)
    {
        //return $request->all();
        $validate = $request->validate([
            'email' => 'required'
        ]);

        $subscription = Subscription::findOrFail($id);
        $subscription->email = $request->email;
        if($request->status){
            $subscription->status = 1;
        }else{
            $subscription->status = 0;
        }
        $subscription->save();

        return redirect()->route('subscription.index')
        ->with([
            'message'    =>'Subscription Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $subscription = Subscription::destroy($id);

        if($subscription){
            return redirect()->route('subscription.index')
            ->with([
                'message'    =>'Subscription Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
