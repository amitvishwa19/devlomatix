<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use App\Http\Controllers\Controller;



class PostController extends Controller
{

    public function __construct(){



    }

    public function index(Request $request)
    {
        //dd(Post::orderby('created_at','desc')->latest('id'));
        if ($request->ajax()) {
            $posts = Post::orderby('created_at','desc')->latest('id');

            return Datatables::of($posts)
            ->editColumn('created_at',function(Post $post){
                return $post->created_at->diffForHumans();
            })
            // ->addColumn('action',function($data){
            //     $link = '<div class="d-flex">'.
            //                 '<a href="'.route('post.edit',$data->id).'" class="mr-2"><small>Edit</small></a>'.
            //                 '<a href="javascript:void(0);" id="'.$data->id.'" class="delete"><small>Delete</small></a>'.
            //             '</div>';
            //     return $link;
            // })
            //->rawColumns(['action'])
            ->make(true);


        }


        return view('admin.pages.posts.post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.posts.post_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());

        $validate = $request->validate([
            'title' => 'required',
        ]);


        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;
        $post->meta_keywords = $request->meta_keywords;
        $post->status = $request->status;
        $post->save();

        return redirect() ->route('posts.index')
        ->with([
            'message'    =>'Post Added Successfully',
            'alert-type' => 'success',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.pages.posts.post_edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            'title' => 'required',
        ]);

        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title,'-');
        $post->description = $request->description;
        $post->body = $request->body;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;
        $post->status = $request->status;
        $post->update();

        return redirect() ->route('posts.index')
        ->with([
            'message'    =>'Post Updated Successfully',
            'alert-type' => 'success',
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        return 'Post will be deleted';
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect() ->route('posts.index')
        ->with([
            'message'    =>'Post Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }
}
