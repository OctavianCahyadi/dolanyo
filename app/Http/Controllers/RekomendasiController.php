<?php
namespace App\Http\Controllers;

//require_once "/home/dolanyoc/app/dolanyo/vendor/autoload.php";

use Phpml\Math\Distance\Euclidean;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Paket;
use App\Rekomendasi;
use Illuminate\Support\Facades\App;

class RekomendasiController extends Controller
{
    public function input0(Request $request,$id)
    {
        $user = User::find($id);
        $user->pegunungan=$request->input('ranting');
        $user->update();
        return redirect('/rekomendasi1');
    }

    public function input1(Request $request,$id)
    {
        $user = User::find($id);
        $user->bangunan=$request->input('ranting');
        $user->update();
        return redirect('/rekomendasi2');
    }

    public function input2(Request $request,$id)
    {
        $user = User::find($id);
        $user->sungai=$request->input('ranting');
        $user->update();
        return redirect('/rekomendasi3');
    }

    public function input3(Request $request,$id)
    {
        Rekomendasi :: where ('user_id',$id)->delete();
        $user = User::find($id);
        $user->pantai=$request->input('ranting');
        $user->update();
        $pakets = DB::table('pakets')->select('id','title','pegunungan','bangunan','sungai','pantai')->get(); 
        $user=DB::table('users')->select('id','pegunungan','bangunan','sungai','pantai')->where('id',$id)->first(); 
 
        foreach ($pakets as $paket)
        {             
             $a = [$paket->pegunungan, $paket->bangunan, $paket->sungai, $paket->pantai];
             $b = [$user->pegunungan, $user->bangunan, $user->sungai, $user->pantai];
            
             $euclidean =$this->eucDistance($a, $b);
            
             $sim=1/(1+$euclidean);
             $this->create($user->id,$paket->id,$paket->title,$sim);
        } 
         return redirect()->route('showrekomendasi',$id);
    }

    public function eucDistance( $vector1,  $vector2) {
        $n = count($vector1);
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $sum += ($vector1[$i] - $vector2[$i]) * ($vector1[$i] - $vector2[$i]);
        }
        return sqrt($sum);
    }

    public function create($user_id,$paket_id,$paket,$sim)
    {
        $rekomendasi =new Rekomendasi;
        $rekomendasi->user_id=$user_id;
        $rekomendasi->pakets_id=$paket_id;
        $rekomendasi->paket=$paket;
        $rekomendasi->sim=$sim;
        $rekomendasi->save();
    }

    public function Destroybypaket($id)
    {
        Rekomendasi :: where ('pakets_id',$id)->delete();
    }

    public function Destroybyuser($id)
    {
        Rekomendasi :: where ('user_id',$id)->delete();
    }

    public function show($id)
    {
        $rekomendasi= DB::table('hasil_rekomendasi')
        ->select('paket','sim')
        ->where('user_id',$id)
        ->orderBy('sim', 'desc')
        ->take(3)
        ->get();
        $paket = Paket :: all();

        return view('rekomendasi')->with('rekomendasi',$rekomendasi)->with('paket',$paket);
    }
}
