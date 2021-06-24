<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $tasks = Task::orderby('created_at','desc')->latest('id');

            return Datatables::of($tasks)
            ->editColumn('created_at',function(Task $task){
                return $task->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('task.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.task.task');

    }

    public function create()
    {
        return view('admin.pages.task.task_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $task = New Task;
        $task->name = $request->name;
        $task->save();

        return redirect()->route('task.index')
        ->with([
            'message'    =>'Task Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $task = Task::findOrFail($id);

        return response()->json($task);
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);

        //return response()->json($task);

        return view('admin.pages.task.task_edit',compact('task'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $task = Task::findOrFail($id);
        $task->name = $request->name;
        $task->save();

        return redirect()->route('task.index')
        ->with([
            'message'    =>'Task Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $task = Task::destroy($id);

        if($task){
            return redirect()->route('task.index')
            ->with([
                'message'    =>'Task Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
