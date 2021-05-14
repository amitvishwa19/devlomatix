<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $contacts = Contact::orderby('created_at','desc')->latest('id');

            return Datatables::of($contacts)
            ->editColumn('created_at',function(Contact $contact){
                return $contact->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('contact.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.contact.contact');

    }

    public function create()
    {
        return view('admin.pages.contact.contact_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $contact = New Contact;
        $contact->name = $request->name;
        $contact->save();

        return redirect()->route('contact.index')
        ->with([
            'message'    =>'Contact Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return response()->json($contact);
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        //return response()->json($contact);

        return view('admin.pages.contact.contact_edit',compact('contact'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $contact = Contact::findOrFail($id);
        $contact->name = $request->name;
        $contact->save();

        return redirect()->route('contact.index')
        ->with([
            'message'    =>'Contact Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $contact = Contact::destroy($id);

        if($contact){
            return redirect()->route('contact.index')
            ->with([
                'message'    =>'Contact Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
