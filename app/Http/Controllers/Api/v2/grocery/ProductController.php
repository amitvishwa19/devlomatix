<?php

namespace App\Http\Controllers\Api\v2\grocery;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GroceryProductResource;
use App\Models\ViewedProduct;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        
        $products = Post::whereHas('categories', function($q) use($category)
        {
            $q->where('slug', '=', $category);
        })->where('status','published')->get();

        return  GroceryProductResource::collection($products);
        
        return $products;
    }

    public function allProducts(){
        $products = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'grocery-products');
        })->where('status','published')->get();

        return  GroceryProductResource::collection($products);
        
        return $products;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }

    public function viewedProducts(Request $request)
    {   
        $vp = ViewedProduct::where('user_id',auth()->user()->id)->where('post_id',$request->productId)->first();

        if($vp){
            $vp->views = $vp->views + 1;
            $vp->save();
        }else{
            $vp =new  ViewedProduct();
            $vp->user_id = auth()->user()->id;
            $vp->post_id = $request->productId;
            $vp->save();
        }
        

        return $request->all();
        return 'viewed products';
    }

    
}
