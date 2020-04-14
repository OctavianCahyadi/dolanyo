<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Mail\TransaksiEmail;
use App\Mail\BatalTransaksiEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class TransaksiController extends Controller
{
    public function send(Request $request){
        $data = [
            'nama' => $request->nama,
            'handphone' =>$request->handphone,
            'peserta' =>$request->peserta,
            'paket' =>$request->paket,
            'email' =>$request->email,
            'tanggal' =>$request->tanggal,
            'overview' =>$request->overview,
            'deskripsi' =>$request->deskripsi,
            'idtransaksi' =>$request->idtransaksi,
            'harga' =>$request->harga,
            'idpaket' =>$request->idpaket,
            'tempat' =>$request->tempat,
          ];
          $transaksi=Transaksi::find($request->id);
          $transaksi->konfirmasi=1;
          $transaksi->update();
          Mail::to($request->email)->send(new TransaksiEmail($data));
          return redirect('/admin/transaksi')->with('success','Status sudah dikonfirmasi, Email terkirim ke pelanggan');
    }

    public function sendbatal(Request $request){
        $data = [
            'nama' => $request->nama,
            'handphone' =>$request->handphone,
            'peserta' =>$request->peserta,
            'paket' =>$request->paket,
            'email' =>$request->email,
            'tanggal' =>$request->tanggal,
            'overview' =>$request->overview,
            'deskripsi' =>$request->deskripsi,
            'idtransaksi' =>$request->idtransaksi,
            'harga' =>$request->harga,
            'idpaket' =>$request->idpaket,
            'tempat' =>$request->tempat,
          ];
          $transaksi=Transaksi::find($request->id);
          $transaksi->konfirmasi=3;
          $transaksi->update();
          Mail::to($request->email)->send(new BatalTransaksiEmail($data));
          return redirect('/admin/transaksi')->with('success','Status sudah dikonfirmasi, Email Pembatalan terkirim ke pelanggan');
    }
    
    
    public function konfirmasi($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        
        $user_id = DB::table('transaksis')->where('id', $id)->value('user_id');
        $user= DB::table('users')->where('id',$user_id)->first();

        $title = DB::table('transaksis')->where('id', $id)->value('paket');
        $pakets = DB::table('pakets')->where('title',$title)->first();        
        return view('admin.konfirmasi')->with('pakets',$pakets)->with('transaksi',$transaksi)->with('users',$user);
    }

    public function posted()
    {
        $transaksi = Transaksi::orderBy('created_at', 'DESC')->paginate(5);
        
        return view('admin.transaksi')->with('posts',$transaksi);
    }

    public function transaksi(Request $request){
        $paket_id = DB::table('pakets')->where('title', $request->paket)->value('id');
        $post=new Transaksi;
        $post->nama = $request->nama;
        $post->user_id = $request->user_id;
        $post->pakets_id = $paket_id;
        $post->handphone = $request->handphone;
        $post->peserta = $request->peserta;
        $post->harga = $request->harga;
        $post->paket = $request->paket;
        $post->tanggal = $request->tanggal;
        $post->tempat = $request->tempat;
        $post->konfirmasi = 0;
        
        $post->save();
        
        return redirect('/profile/'.$request->user_id)->with('success','Pesanan Anda sudah kami terima, Silahkan tunggu konfirmasi Email dari kami. Terima kasih.');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $queryType = $request->atribut;
            if ($queryType == 'id'){
                $transaksi = DB::table('transaksis')
                ->where('id',$cari)
                ->paginate();
            }else{
                $transaksi = DB::table('transaksis')
                ->where('nama','like',"%".$cari."%")
                ->paginate();
    
            }
            
            return view('admin.transaksi')->with('posts',$transaksi);
    
    }
    public function destroy($id)
    {
        $posts = Transaksi::findOrfail($id);
        $posts ->delete();

        return redirect('/admin/transaksi')->with('success','Your Data is Deleted');
    }
}
