<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Rekomendasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function registered(){

        $users = User::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.register')->with('users',$users);
    }
    
    public function registeredit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }
        
    public function registerupdate(Request $request, $id)
    {
        $users =User::find($id);
        $users->name=$request->input('username');
        $users->usertype=$request->input('usertype');
        $users->update();
        
        return redirect('/admin/role-register')->with('success','Your Data is Updated');
    }
    
    public function registerdelete($id)
    {
        $users= User::findOrfail($id);
        $users->delete();
        app()->call('App\Http\Controllers\RekomendasiController@Destroybyuser',[$id]);

        return redirect('/admin/role-register')->with('success','Your Data is Deleted');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $queryType = $request->atribut;
            if ($queryType == 'nama'){
                $pegawai = DB::table('users')
                ->where('name','like',"%".$cari."%")
                ->paginate();
            }else{
                $pegawai = DB::table('users')
                ->where('email','like',"%".$cari."%")
                ->paginate();
    
            }
            
            return view('admin.register')->with('users',$pegawai);
    }

    public function updatebyuser(Request $request)
    {
        $users =User::find($request->id);
        $users->name=$request->nama;
        $users->phone=$request->handphone;
        $users->email=$request->email;
        $users->update();
        
        $post = DB::table('transaksis')
        ->where('user_id',$request->id)
        ->paginate();
        return view('/profile')->with('success','Your Data is Updated')->with('posts',$post);
    }
}
