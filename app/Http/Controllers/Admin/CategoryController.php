<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $categories = Category::orderby('created_at','desc')->latest('id');

            return Datatables::of($categories)
            ->editColumn('created_at',function(Category $category){
                return $category->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('category.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.category.category');

    }

    public function create()
    {
        return view('admin.pages.category.category_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $category = New Category;
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index')
        ->with([
            'message'    =>'Category Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        return response()->json($category);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        //return response()->json($category);

        return view('admin.pages.category.category_edit',compact('category'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index')
        ->with([
            'message'    =>'Category Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $category = Category::destroy($id);

        if($category){
            return redirect()->route('category.index')
            ->with([
                'message'    =>'Category Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
