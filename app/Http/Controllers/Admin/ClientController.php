<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Client;

class ClientController extends Controller
{
    public function __construct(){


    }

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $clients = Client::orderby('created_at','desc')->latest('id');

            return Datatables::of($clients)
            ->editColumn('created_at',function(Client $client){
                return $client->created_at->diffForHumans();
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('client.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.client.client');

    }

    public function create()
    {
        return view('admin.pages.client.client_add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $client = New Client;
        $client->name = $request->name;
        $client->save();

        return redirect()->route('client.index')
        ->with([
            'message'    =>'Client Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function show($id)
    {
        $client = Client::findOrFail($id);

        return response()->json($client);
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);

        //return response()->json($client);

        return view('admin.pages.client.client_edit',compact('client'));
    }

    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->save();

        return redirect()->route('client.index')
        ->with([
            'message'    =>'Client Updated Successfully',
            'alert-type' => 'success',
        ]);


    }

    public function destroy($id)
    {
        $client = Client::destroy($id);

        if($client){
            return redirect()->route('client.index')
            ->with([
                'message'    =>'Client Updated Successfully',
                'alert-type' => 'success',
            ]);
        }else{

        }

    }
}
