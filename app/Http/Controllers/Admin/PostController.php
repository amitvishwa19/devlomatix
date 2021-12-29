<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;



class PostController extends Controller
{

    public function __construct(){



    }

    public function index(Request $request)
    {
        //dd(auth()->user()->posts()->with('author','categories')->latest('id'));
        if ($request->ajax()) {
            $posts = Post::orderby('created_at','desc')->latest('id');

            return Datatables::of($posts)
            ->editColumn('created_at',function(Post $post){
                return $post->created_at->diffForHumans();
            })
            ->addColumn('postdetails',function($post){
                return '<div class="media">
                            <img src="'.$post->feature_image.'" height="30" class="me-3 align-self-center rounded mr-2" alt="...">
                            <div class="media-body align-self-center">
                                <h6 class="m-0">'. $post->title.'</h6>
                                <small>'.$post->author->firstName .','. $post->author->lastName.'</small
                            </div><!--end media body-->
                        </div>';
            })
            ->addColumn('author',function($post){
                return $post->author->firstName .','. $post->author->lastName;
            })
            ->addColumn('category',function($post){
                $categories = $post->categories;
                //return $categories;
                $cat = '';

                if($categories){
                    foreach($categories as $category){
                       $cat = $cat. '<div class="badge badge-info mr-1" >'. $category->name .'</div>';
                    };
                }

                return $cat;
            })
            ->addColumn('status',function(Post $post){
                if($post->status == 'published'){
                    return '<a href="'.route('post.edit',$post->id).'" class="badge badge-soft-success"><small>Published</small></a>';
                }else{
                    return '<a href="'.route('post.edit',$post->id).'" class="badge badge-soft-danger"><small>Draft</small></a>';
                }
            })
            ->addColumn('action',function($data){
                $link = '<div class="d-flex">'.
                            '<a href="'.route('post.edit',$data->id).'" class="badge badge-soft-primary mr-2"><small>Edit</small></a>'.
                            '<a href="javascript:void(0);" id="'.$data->id.'" class="badge badge-soft-danger delete"><small>Delete</small></a>'.
                        '</div>';
                return $link;
            })
            ->rawColumns(['action','status','author'.'category','postdetails'])
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

        dd($request->all());

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
        $post->delete();
        return redirect() ->route('posts.index')
        ->with([
            'message'    =>'Post Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function delete(Post $post)
    {
        dd($post);
        $post->delete();
        return redirect() ->route('posts.index')
        ->with([
            'message'    =>'Post Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }
}
