<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\DB;
use Image;
use File;
use Illuminate\Support\Facades\Validator;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posted(){

        $post = Post::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.post')->with('posts',$post);
    }


    public function nouserall(){
        return view('blog',[
            'posts'=>Post::latest()->paginate(3)
        ]);
    }

    public function all(){
        return view('blog2',[
            'posts'=>Post::latest()->paginate(3)
        ]);
    }

    public function single (Post $post){
        return view('single2', compact('post'));
    }

    public function nousersingle (Post $post){
        return view('single', compact('post'));
    }

    public function index()
    {
        return PostResource::collection(Post::latest()->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        return view('admin.post-create');
    }

    
    public function store(Request $request)
    {
        $validate= $request->validate([
            'title'=>['required','string','unique:posts'], 
            'body'=>['required','string'],           
        ]);


        $post =new Post;
        $file=$request->file('file');
        $nama_file=time()."_".$file->getClientOriginalName();
        $tujuanupload='tumbnail';
        $resize_image=Image::make($request->file('file')->getRealPath());
        $resize_image->resize(200,200,function($constraint){
            $constraint->aspectRatio();
        })->save($tujuanupload .'/'. $nama_file);
        $tujuanupload='data_file';
        $file->move($tujuanupload,$nama_file);
        $post->user_id =$request->user_id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image= $nama_file;
        $post->save();

        return redirect('/posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post-edit')->with('posts',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate= $request->validate([
            'title'=>['required','string'], 
            'body'=>['required','string'],           
        ]);
        $posts = Post::find($id);
        if ($request->File('file')) { 
            

            $file=$request->file('file');
            $nama_file=time()."_".$file->getClientOriginalName();
            $tujuanupload='tumbnail';
            $resize_image=Image::make($file->getRealPath());
            $resize_image->resize(200,200,function($constraint){
            $constraint->aspectRatio();
            })->save($tujuanupload .'/'. $nama_file);
            $tujuanupload='data_file';
            $file->move($tujuanupload,$nama_file);
            $posts->image= $nama_file;
        }

        $posts->title=$request->title;
        $posts->body=$request->body;     
        $posts->update();
        
        return redirect('/posted')->with('success','Your Data is Updated');
    }

    public function destroy($id)
    {
        $posts = Post::findOrfail($id);
        $posts ->delete();
        File::delete('data_file/'.$posts->image);
        File::delete('tumbnail/'.$posts->image);

        return redirect('/posted')->with('success','Your Data is Deleted');
    }
    
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $queryType = $request->atribut;
            if ($queryType == 'id'){
                $post = DB::table('posts')
                ->where('id',$cari)
                ->paginate();
            }else{
                $post = DB::table('posts')
                ->where('title','like',"%".$cari."%")
                ->paginate();
    
            }

            return view('admin.post')->with('posts',$post);
    
    }
}
