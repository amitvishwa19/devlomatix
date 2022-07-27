<?php

namespace App\Http\Controllers\Api\v2\grocery;


use App\Models\Cart;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\OrderResource;
use App\Http\Resources\CartCollection;
use App\Http\Resources\AddressResource;

class CheckoutController extends Controller
{
   
    public function index()
    {
        $user = auth()->user();
        $orders = $user->orders;
        return OrderResource::collection($orders);
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {  
        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->cart = serialize($request->cart);
        $order->address = serialize($request->address);
        $order->status =$request->status;
        $order->payment_id =$request->payment_id;
        $order->save();

        if($order){
            $user = auth()->user();
            $cart_items = $user->cart_items;
            foreach($cart_items as $item) {
                Cart::destroy($item->id);
            }

            return response()->json(['message' => 'success'],200);
        }
       
      
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

    public function cancelOrder(Request $request){
        return 'Cancel order server';

    }

    public function cloneOrder(Request $request){
        $order = Order::find($request->id);
        $new_order = $order->replicate();
        $new_order->status = 'ordered';
        $new_order->save();
        if($new_order){
            return response()->json(['message' => 'success'],200);
        }
    }
}
