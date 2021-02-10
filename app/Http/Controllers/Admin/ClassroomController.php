<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClassroomRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $classrooms = Classroom::orderby('created_at','desc')->latest('id');

            return Datatables::of($classrooms)
            ->editColumn('created_at',function(Classroom $classroom){
                    return $classroom->created_at->diffForHumans();
                })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('classroom.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.classroom.classroom');

    }

    public function create()
    {
        return view('admin.pages.classroom.classroom_add');
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $classroom = New Classroom;
        $classroom->user_id = auth()->user()->id;
        $classroom->name = $request->name;
        $classroom->description = $request->description;
        $classroom->status = $request->status;
        $classroom->save();

        return redirect()->route('classroom.index')
        ->with([
            'message'    =>'Classroom Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $classroom = Classroom::findOrFail($id);

        return response()->json($classroom);
    }

    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);

        //return response()->json($classroom);

        return view('admin.pages.classroom.classroom_edit',compact('classroom'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $classroom = Classroom::findOrFail($id);
        $classroom->name = $request->name;
        $classroom->description = $request->description;
        $classroom->status = $request->status;
        $classroom->save();

        return redirect()->route('classroom.index')
        ->with([
            'message'    =>'Classroom Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $classroom = Classroom::destroy($id);

        if($classroom){
            return redirect()->route('classroom.index')
            ->with([
                'message'    =>'Classroom Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
