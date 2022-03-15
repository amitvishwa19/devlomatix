<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IntenshipRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Intenship;

class IntenshipController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $intenships = Intenship::orderby('created_at','desc')->latest('id');

            return Datatables::of($intenships)
            ->editColumn('created_at',function(Intenship $intenship){
                return $intenship->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('intenship.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.intenship.intenship');

    }

    public function create()
    {
        return view('admin.pages.intenship.intenship_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $intenship = New Intenship;
        $intenship->name = $request->name;
        $intenship->save();

        return redirect()->route('intenship.index')
        ->with([
            'message'    =>'Intenship Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $intenship = Intenship::findOrFail($id);

        return response()->json($intenship);
    }

    public function edit($id)
    {
        $intenship = Intenship::findOrFail($id);

        //return response()->json($intenship);

        return view('admin.pages.intenship.intenship_edit',compact('intenship'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $intenship = Intenship::findOrFail($id);
        $intenship->name = $request->name;
        $intenship->save();

        return redirect()->route('intenship.index')
        ->with([
            'message'    =>'Intenship Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $intenship = Intenship::destroy($id);

        if($intenship){
            return redirect()->route('intenship.index')
            ->with([
                'message'    =>'Intenship Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
