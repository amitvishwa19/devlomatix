<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Project;

class ProjectController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $projects = Project::orderby('created_at','desc')->latest('id');

            return Datatables::of($projects)
            ->editColumn('created_at',function(Project $project){
                return $project->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('project.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.project.dashboard');

    }

    public function create()
    {
        return view('admin.pages.project.project_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $project = New Project;
        $project->name = $request->name;
        $project->save();

        return redirect()->route('project.index')
        ->with([
            'message'    =>'Project Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return response()->json($project);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        //return response()->json($project);

        return view('admin.pages.project.project_edit',compact('project'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $project = Project::findOrFail($id);
        $project->name = $request->name;
        $project->save();

        return redirect()->route('project.index')
        ->with([
            'message'    =>'Project Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $project = Project::destroy($id);

        if($project){
            return redirect()->route('project.index')
            ->with([
                'message'    =>'Project Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
