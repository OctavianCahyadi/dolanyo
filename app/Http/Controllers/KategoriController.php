<?php

namespace App\Http\Controllers;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\PostResource;
use App\Rekomendasi;
use App\Paket;
use Image;
use File;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class KategoriController extends Controller
{
    public function show(){
        $kategori = Kategori::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.kategori')->with('posts',$kategori);
    }

    public function kategori(){
        $kategori = Kategori::orderBy('created_at', 'DESC')->paginate(5);
        return view('viewpaket')->with('kategori',$kategori);
    }

    public function kategoriall(){
        $kategori = Kategori::orderBy('created_at', 'DESC')->paginate(5);
        return view('viewpaket2')->with('kategori',$kategori);
    }

    public function create ()
    {
        return view('admin.kategori-create');
    }

    public function store(Request $request)
    {
        $validate= $request->validate([
            'kategori'=>['required','string'],         
            'maksimal'=>['required','numeric'],      
            'minimal'=>['required','numeric'],   
        ]);

        $post =new Kategori();
        $file=$request->file('file');
        $nama_file=time()."_".$file->getClientOriginalName();
        $tujuanupload='tumbnail';
        $resize_image=Image::make($file->getRealPath());
        $resize_image->resize(200,200,function($constraint){
            $constraint->aspectRatio();
        })->save($tujuanupload .'/'. $nama_file);
        $tujuanupload='data_file';
        $file->move($tujuanupload,$nama_file);

        $post->kategori = $request->kategori;
        $post->maxpeserta = $request->maksimal;
        $post->minpeserta = $request->minimal;
        $post->image= $nama_file;
        $post->save();

        return redirect('/admin/kategori');
    }
    
    public function destroy(Request $request)
    {

        $posts = Kategori::findOrfail($request->datadelete);
        $pakets = DB::table('pakets')->select('id','image')->where('kategori',$posts->id)->get(); 
        foreach ($pakets as $paket)
        {
            app()->call('App\Http\Controllers\PaketController@destroybykategori',[$paket->id]); 
        }
        File::delete('data_file/'.$posts->image);
        File::delete('tumbnail/'.$posts->image);
        $posts ->delete();
        
        return redirect('/admin/kategori')->with('success','Your Data is Deleted');
    }

    public function edit($id)
    {
        $post = Kategori::findOrFail($id);
        return view('admin.kategori-edit')->with('kategori',$post);
    }
    public function update(Request $request, $id)
    {
        $validate= $request->validate([
            'kategori'=>['required','string'],         
            'maksimal'=>['required','numeric'],      
            'minimal'=>['required','numeric'],   
        ]);

       $post = Kategori::find($id);
        if ($request->File('file')) {    
            File::delete('data_file/'.$post->image);
            File::delete('tumbnail/'.$post->image);

            $file=$request->file('file');
            $nama_file=time()."_".$file->getClientOriginalName();
            $tujuanupload='tumbnail';
            $resize_image=Image::make($file->getRealPath());
            $resize_image->resize(200,200,function($constraint){
            $constraint->aspectRatio();
            })->save($tujuanupload .'/'. $nama_file);
            $tujuanupload='data_file';
            $file->move($tujuanupload,$nama_file);
            $post->image= $nama_file;
        }
        $post->kategori = $request->kategori;
        $post->maxpeserta = $request->maksimal;
        $post->minpeserta = $request->minimal;
        $post->save();

        return redirect('/admin/kategori')->with('success','Your Data is Updated');
    }
}
