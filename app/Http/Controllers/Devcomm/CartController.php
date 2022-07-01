<?php

namespace App\Http\Controllers\Devcomm;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CartCollection;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'cart';
        $user = auth()->user();
        //$cart_items = new CartResource($user->cart_items);
        $cart_items = $user->cart_items;
        //return $cart_items;
        return  CartResource::collection($cart_items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        //return $request;

        // $cart = new Cart;
        // $cart->user_id =  auth()->user()->id;
        // $cart->post_id = $request->productId;
        // $cart->quantity = $request->quantity;
        // $cart->save();

        // $cart = Cart::updateOrCreate(
        //     ['user_id' => auth()->user()->id,'post_id'=>$request->productId],
        //     ['user_id' => auth()->user()->id]
        // );

        $item = Cart::where('user_id',auth()->user()->id)->where('post_id',$request->productId)->first();

        if( $item){
            $item->quantity = $item->quantity + $request->quantity;
            $item->save();
        }else{
            $item = new Cart;
            $item->user_id =  auth()->user()->id;
            $item->post_id = $request->productId;
            $item->quantity = $request->quantity;
            $item->save();
        }

        return $item;

        $user = auth()->user()->id;
        return $request;
        return 'Add to cart from web controller';

        // $chat = New Chat;
        // $chat->name = $request->name;
        // $chat->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        

        $cart = Cart::destroy($request->cartId);

        if($cart){
            return response()->json(['message' => 'Deleted successfully'],200);
        }else{
            return response()->json(['message' => 'Error'],500);
        }

    }
}
