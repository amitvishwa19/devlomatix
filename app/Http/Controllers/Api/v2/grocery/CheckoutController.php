<?php

namespace App\Http\Controllers\Api\v2\grocery;

use App\Models\Cart;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CartCollection;
use App\Http\Resources\AddressResource;

class CheckoutController extends Controller
{
   
    public function index()
    {
        $user = auth()->user();
        $orders = $user->orders;
        return $orders;
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {  
        return $request->address;
       
      
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update($id,Request $request)
    {
        
      
    }

   
    public function destroy(Request $request)
    {
        


    }
}
