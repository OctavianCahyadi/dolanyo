<?php

namespace App\Http\Controllers;
use App\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('homepage');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function card(){
        return view('card');
    }
    public function contact(){
        return view('contact');
    }
    public function contactall(){
        return view('contactall');
    }
    public function paket(){
        return view('viewpaket');
    }
    public function paketall(){
        return view('viewpaket2');
    }

    public function rekomendasi0()
    {
        return view('rekomendasi0');
    }
    public function rekomendasi1()
    {
        return view('rekomendasi1');
    }
    public function rekomendasi2()
    {
        return view('rekomendasi2');
    }
    public function rekomendasi3()
    {
        return view('rekomendasi3');
    }
    public function rekomendasi4()
    {
        return view('rekomendasi4');
    }

    public function email()
    {
        return view('emailku');
    }
    public function profile($id)
    {
        $post = DB::table('transaksis')
        ->where('user_id',$id)
        ->orderBy('created_at', 'desc')
        ->paginate();

        return view('profile')->with('posts',$post);
    }
    public function editprofile()
    {
        return view('editprofile');
    }
    
}
