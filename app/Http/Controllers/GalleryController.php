<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Gallery;
use Image;
use File;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function all(){

        $gallery = Gallery::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.gallery')->with('paket',$gallery);
    }

    public function create()
    {
        return view('admin.gallery-create');
    }

    public function store(Request $request)
    {
        $post=new Gallery;
        $file=$request->file('file');
        $nama_file=time()."_".$file->getClientOriginalName();
        $tujuanupload='tumbnail';
        $resize_image=Image::make($file->getRealPath());
        $resize_image->resize(400,400,function($constraint){
            $constraint->aspectRatio();
        })->save($tujuanupload .'/'. $nama_file);
        $tujuanupload='gallery';
        $file->move($tujuanupload,$nama_file);
        $post->nama = $request->nama;
        $post->image= $nama_file;
        $post->save();
        
        return redirect('/admin/gallery');
    }

    public function showgallery()
    {
        $gallery = Gallery::orderBy('created_at', 'DESC')->paginate(6);
        return view('gallery')->with('gallery',$gallery);
    }

    public function showgalleryall()
    {
        $gallery = Gallery::orderBy('created_at', 'DESC')->paginate(6);
        return view('galleryall')->with('gallery',$gallery);
    }
    
    public function delete($id){
        $gambar = Gallery::where('id',$id)->first();
        File::delete('gallery/'.$gambar->image);
        File::delete('tumbnail/'.$gambar->image);
        Gallery::where('id',$id)->delete();
     
        return redirect('/admin/gallery')->with('success','Your Data is Deleted');
    }
}
