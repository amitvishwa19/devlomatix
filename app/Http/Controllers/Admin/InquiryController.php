<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InquiryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $inquiries = Inquiry::orderby('created_at','desc')->latest('id');

            return Datatables::of($inquiries)
            ->editColumn('created_at',function(Inquiry $inquiry){
                return $inquiry->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('inquiry.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.inquiry.inquiry');

    }

    public function create()
    {
        return view('admin.pages.inquiry.inquiry_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $inquiry = New Inquiry;
        $inquiry->name = $request->name;
        $inquiry->save();

        return redirect()->route('inquiry.index')
        ->with([
            'message'    =>'Inquiry Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $inquiry = Inquiry::findOrFail($id);

        return response()->json($inquiry);
    }

    public function edit($id)
    {
        $inquiry = Inquiry::findOrFail($id);

        //return response()->json($inquiry);

        return view('admin.pages.inquiry.inquiry_edit',compact('inquiry'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $inquiry = Inquiry::findOrFail($id);
        $inquiry->name = $request->name;
        $inquiry->save();

        return redirect()->route('inquiry.index')
        ->with([
            'message'    =>'Inquiry Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $inquiry = Inquiry::destroy($id);

        if($inquiry){
            return redirect()->route('inquiry.index')
            ->with([
                'message'    =>'Inquiry Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
