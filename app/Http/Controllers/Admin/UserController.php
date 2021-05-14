<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\UserRequest;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UserController extends Controller
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
            ->addColumn('type',function($user){
                return ucfirst($user->type) ;
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
            ->addColumn('permissions',function($user){
                $permissions = $user->permissions;
                $rl ='';
                if($permissions){
                    foreach($permissions as $permission){
                       $rl = $rl. '<div class="badge badge-success mr-1" >'. $permission->name .'</div>';
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
                            '<a href="'.route('user.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->addColumn('status',function(User $user){
                if($user->status == true){
                    return '<div class="badge badge-success">Active</div>';
                }else{
                    return '<div class="badge badge-warning">InActive</div>';
                }
            })
            ->rawColumns(['name','action','roles','permissions','status'])
            ->make(true);


        }


        return view('admin.pages.user.user');

    }

    public function create()
    {
        return view('admin.pages.user.user_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $user = New User;
        $user->name = $request->name;
        $user->save();

        return redirect()->route('user.index')
        ->with([
            'message'    =>'User Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json($user);
    }

    public function edit(User $user)
    {

        $roles = Role::get();

        //return response()->json($user);

        return view('admin.pages.user.user_edit')->with('roles',$roles)->with('user',$user);
    }

    public function update(Request $request, User $user)
    {
        //dd($request->all());

        $validate = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'email'
        ]);


        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->update();

        $user->syncRoles($request->roles);

        return redirect()->route('user.index')
        ->with([
            'message'    =>'User Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $user = User::destroy($id);

        if($user){
            return redirect()->route('user.index')
            ->with([
                'message'    =>'User Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
