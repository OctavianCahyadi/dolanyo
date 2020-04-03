<?php

namespace App\Http\Controllers;

use App\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rekomendasi;
use App\User;
use App\Kategori;
use Image;
use File;

class PaketController extends Controller
{
    public function all(){

        $paket = Paket::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.paket')->with('paket',$paket);
    }
    

    public function postpaket(Request $request){        
        $kategori = DB::table('pakets')->where('kategori',$request->kategori)->get();
        return view('paket')->with('pakets',$kategori);
    }

    public function postpaketall(Request $request){

        $kategori=$request->kategori;

        $pakets = DB::table('pakets')->where('kategori',$kategori)->get();
        
        return view('paket2')->with('pakets',$pakets);
    }

    public function single (Paket $paket){
       
        $kategori = DB::table('kategoris')->where('id',$paket->kategori)->first();
        return view('singlepaket', compact('paket'))->with('kategori',$kategori);
    }

    public function singleall (Paket $paket){
       
        
        $kategori = DB::table('kategoris')->where('id',$paket->kategori)->first();
        return view('singlepaket2', compact('paket'))->with('kategori',$kategori);
    }
   
    public function create()
    {
        $kategori = Kategori::All();
        return view('admin.paket-create')->with(['kategori' => $kategori]);
    }
    
     //_____FUNGSI EUCLIDEAN DISTANCE_____//

    public function eucDistance( $vector1,  $vector2) {
        $n = count($vector1);
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $sum += ($vector1[$i] - $vector2[$i]) * ($vector1[$i] - $vector2[$i]);
        }
        return sqrt($sum);
    }

    public function store(Request $request)
    {
        $post=new Paket;

        $file=$request->file('file');
        $nama_file=time()."_".$file->getClientOriginalName();
        $tujuanupload='tumbnail';
        $resize_image=Image::make($file->getRealPath());
        $resize_image->resize(200,200,function($constraint){
            $constraint->aspectRatio();
        })->save($tujuanupload .'/'. $nama_file);
        $tujuanupload='data_file';
        $file->move($tujuanupload,$nama_file);

        $post->pegunungan = $request->ranting1; 
        $post->bangunan = $request->ranting2; 
        $post->sungai = $request->ranting3; 
        $post->pantai = $request->ranting4;
        $post->title = $request->title;
        $post->deskripsi = $request->deskripsi;
        $post->overview = $request->overview;
        $post->fasilitas = $request->fasilitas;
        $post->ketentuan = $request->ketentuan;
        $post->kategori = $request->kategori;
       
        $post->harga_mulai=$request->harga_mulai;
        $post->image= $nama_file;
        $post->save();

        //UPDATE DATA REKOMENDASI USER SETELAH INPUT PAKET BARU//
        $users=DB::table('users')->select('id','pegunungan','bangunan','sungai','pantai')->get();
        $paket = DB::table('pakets')->where('title', $request->title)->value('id');
        foreach ($users as $user)
        {
            $a = [$user->pegunungan, $user->bangunan, $user->sungai, $user->pantai];
            $b = [$request->ranting1, $request->ranting2, $request->ranting3, $request->ranting4];

            $euclidean =$this->eucDistance($a, $b);
            $sim=1/(1+$euclidean);
            app()->call('App\Http\Controllers\RekomendasiController@create',[$user->id,$paket,$request->title,$sim]);
        }
        return redirect('/admin/paket');
    }

    public function edit($id)
    {
        $post = paket::findOrFail($id);
        $kategori = Kategori::All();
        return view('admin.paket-edit')->with('paket',$post)->with(['kategori' => $kategori]);
    }

   
    public function update(Request $request, $id)
    {
        $post = Paket::find($id);

        if ($request->File('image')) {

            File::delete('data_file/'.$post->image);
            File::delete('tumbnail/'.$post->image);
            $file = $request->file('image');
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

        $oldtitle=$post->title;
        $post->pegunungan = $request->ranting1; 
        $post->bangunan = $request->ranting2; 
        $post->sungai = $request->ranting3; 
        $post->pantai = $request->ranting4;
        $post->title = $request->title;
        $post->deskripsi = $request->deskripsi;
        $post->overview = $request->overview;
        $post->fasilitas = $request->fasilitas;
        $post->ketentuan = $request->ketentuan;
        $post->kategori = $request->kategori;
       
        $post->harga_mulai=$request->harga_mulai;
        
        $post->update();

        //UPDATE DATA REKOMENDASI USER SETELAH INPUT PAKET BARU//
        Rekomendasi :: where ('paket',$oldtitle)->delete();

        $users=DB::table('users')->select('id','pegunungan','bangunan','sungai','pantai')->get();
        $paket = DB::table('pakets')->where('title', $request->title)->value('id');
        
        foreach ($users as $user)
        {
            $a = [$user->pegunungan, $user->bangunan, $user->sungai, $user->pantai];
            $b = [$request->ranting1, $request->ranting2, $request->ranting3, $request->ranting4];

            $euclidean =$this->eucDistance($a, $b);
            $sim=1/(1+$euclidean);
            app()->call('App\Http\Controllers\RekomendasiController@create',[$user->id,$paket,$request->title,$sim]);
        }
        return redirect('/admin/paket')->with('success','Your Data is Updated');
    }

    public function destroy($id)
    {
        $pakets = Paket::findOrfail($id);
        app()->call('App\Http\Controllers\RekomendasiController@Destroybypaket',[$id]);
  
        File::delete('data_file/'.$pakets->image);
        File::delete('tumbnail/'.$pakets->image);
        $pakets ->delete();
        return redirect('/admin/paket')->with('success','Your Data is Deleted');
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $queryType = $request->atribut;
            if ($queryType == 'id'){
                $paket = DB::table('pakets')
                ->where('id',$cari)
                ->paginate();
            }else{
                $paket = DB::table('pakets')
                ->where('title','like',"%".$cari."%")
                ->paginate();
    
            } 

            return view('admin.paket')->with('paket',$paket);
    
    }
}
