<?php

namespace App\Http\Controllers\Api\v2\grocery;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ViewedProduct;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\ViewedResource;
use App\Http\Resources\GroceryProductResource;
use App\Http\Resources\Grocery\ProductResource;

class ProductController extends Controller
{

    public function allProducts(){

        // $products = Post::whereHas('categories', function($q)
        // {
        //     $q->where('slug', '=', 'grocery-products');
        // })->where('status','published')->get();
        //return  GroceryProductResource::collection($products);

        $products = Product::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'grocery-products');
        })->where('status',true)->orderBy('id','desc')->get();

        //return $products;

        return  ProductResource::collection($products);

        

    }

    
    public function products($category)
    {
        
        $products = Post::whereHas('categories', function($q) use($category)
        {
            $q->where('slug', '=', $category);
        })->where('status','published')->get();

        return  GroceryProductResource::collection($products);

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
        
        $products = auth()->user()->viewedItems;
        return ViewedResource::collection($products);
       
    }


    public function most_viewed(){
        //$products = ViewedProduct::where('user_id','<>',auth()->user()->id)->orderBy('views', 'DESC')->get();
        $products = ViewedProduct::select('post_id')->groupBy('post_id')->get();

        // $products = DB::table('viewed_products')
        //          ->select('post_id', DB::raw('views(*) as total'))
        //          ->groupBy('post_id')
        //          ->get();
        //return $products;

        return ViewedResource::collection($products);
        //return $products;
    }

    
}
