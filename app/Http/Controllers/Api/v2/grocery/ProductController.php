<?php

namespace App\Http\Controllers\Api\v2\grocery;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GroceryProductResource;
use App\Http\Resources\ViewedResource;
use App\Models\ViewedProduct;

class ProductController extends Controller
{
    
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

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }


    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }

    public function viewed(Request $request)
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

    public function recently_viewed(){

        return ViewedResource::collection(auth()->user()->viewedItems);
        $products = auth()->user()->viewedItems;
        return $products;


    }


    public function most_viewed(){

        
    }

    
}
