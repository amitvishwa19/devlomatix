<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoutingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Routing;

class RoutingController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $routings = Routing::orderby('created_at','desc')->latest('id');

            return Datatables::of($routings)
            ->editColumn('created_at',function(Routing $routing){
                return $routing->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('routing.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.routing.routing');

    }

    public function create()
    {
        return view('admin.pages.routing.routing_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $routing = New Routing;
        $routing->name = $request->name;
        $routing->save();

        return redirect()->route('routing.index')
        ->with([
            'message'    =>'Routing Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $routing = Routing::findOrFail($id);

        return response()->json($routing);
    }

    public function edit($id)
    {
        $routing = Routing::findOrFail($id);

        //return response()->json($routing);

        return view('admin.pages.routing.routing_edit',compact('routing'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $routing = Routing::findOrFail($id);
        $routing->name = $request->name;
        $routing->save();

        return redirect()->route('routing.index')
        ->with([
            'message'    =>'Routing Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $routing = Routing::destroy($id);

        if($routing){
            return redirect()->route('routing.index')
            ->with([
                'message'    =>'Routing Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
