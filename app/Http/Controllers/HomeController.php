<?php

namespace App\Http\Controllers;
use App\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
        $kategori = Kategori::orderBy('created_at', 'DESC')->paginate(5);
        return view('home')->with('kategori',$kategori);
    }

}
