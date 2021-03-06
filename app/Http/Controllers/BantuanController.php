<?php

namespace App\Http\Controllers;
use App\Bantuan;
use Illuminate\Http\Request;
use App\Mail\BantuanEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class BantuanController extends Controller
{
    public function show(){
        $bantuan = Bantuan::orderBy('created_at', 'DESC')->paginate(5);

        return view('admin.bantuan')->with('posts',$bantuan);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama'=>'required',
            'email'=>'required|email',
            'pertanyaan'=>'required',
        ]);

        $bantuan =new Bantuan();
        $bantuan->nama = $request->nama;
        $bantuan->email = $request->email;
        $bantuan->respons =0;
        $bantuan->pertanyaan = $request->pertanyaan;
        $bantuan->save();
               
        if ($request->page ==1) {
            return redirect('/contact')->with('success','Bantuan sudah terkirim');
        } else {
            return redirect('/')->with('success','Bantuan sudah terkirim');
        }
        
    }

    public function respons($id)
    {
        $bantuan = Bantuan::findOrFail($id);
        
        return view('admin.respons')->with('bantuan',$bantuan);
    }

    public function send(Request $request){
        $data = [
            'id' => $request->id,
            'nama' =>$request->nama,
            'email' =>$request->email,
            'pertanyaan' =>$request->pertanyaan,
            'jawaban' =>$request->jawaban,
            'waktu' =>$request->waktu,
          ];
          $bantuan=Bantuan::find($request->id);
          $bantuan->respons = 1;
          $bantuan->jawaban = $request->jawaban;
          $bantuan->update();
          Mail::to($request->email)->send(new BantuanEmail($data));
          return redirect('/admin/bantuan')->with('success','Bantuan sudah diresponse, Email bantuan terkirim ke pelanggan');
    }

    public function destroy(Request $request )
    {
        $bantuan = Bantuan::findOrFail($request->datadelete);
        $bantuan ->delete();

        return redirect('/admin/bantuan')->with('success','Your Data is Deleted');
    }

    public function showunrespons()
    {  
        $post = DB::table('bantuans')
        ->where('respons',"0")
        ->paginate(5);
        return view('/admin/bantuan')->with('posts',$post);
    
    }

}
