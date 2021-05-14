<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Impersonate;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ImpersonateRequest;

class ImpersonateController extends Controller
{
    public function index(Request $request)
    {


        if ($request->ajax()) {
            $users = User::orderby('created_at','desc')->latest('id');

            return Datatables::of($users)
            ->editColumn('created_at',function(User $user){
                return $user->created_at->diffForHumans();
            })
            ->addColumn('name',function($user){
                return ucfirst($user->firstName) .','. ucfirst($user->lastName);
            })
            ->addColumn('roles',function($user){
                $roles = $user->roles;
                $rl ='';
                if($roles){
                    foreach($roles as $role){
                       $rl = $rl. '<div class="badge badge-success mr-1" >'. $role->name .'</div>';
                    };
                }
                if($rl){
                    return $rl;
                }else{
                    return '-';
                }

            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('impersonate.enter',$data->id).'" class="">Impersonate</a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['name','roles','action'])
            ->make(true);


        }


        return view('admin.pages.impersonate.impersonate');

    }

    public function impersonate($user_id)
    {
        $user = User::findOrFail($user_id);
        Auth::user()->impersonate($user);
        return redirect()->back()
        ->with([
            'message'    =>'User impersonated Successfully to ' . $user->firstName .','. $user->lastName,
            'alert-type' => 'success',
        ]);
    }

    public function impersonate_leave()
    {
        Auth::user()->leaveImpersonation();
        return redirect()->route('admin.dashboard')
        ->with([
            'message'    =>'Switched back to loggedIn user',
            'alert-type' => 'success',
        ]);;
    }
}
