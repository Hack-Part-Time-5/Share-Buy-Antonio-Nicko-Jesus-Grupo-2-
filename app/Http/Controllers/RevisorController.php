<?php

namespace App\Http\Controllers;
use App\Mail\BecomeRevisor;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;


class RevisorController extends Controller
{
//     public function __construct()
// {
// 	$this->middleware('isRevisor');
// }

	public function index ()
    {
        $ad = Ad::where('is_accepted',null)
		->orderBy('created_at','desc')
		->first();
		return view('revisor.home',compact('ad'));
    }

	public function becomeRevisor(){
		Mail::to('admin@shareandbuy.es')->send(new BecomeRevisor(Auth::user()));
		return redirect()->route('home')->withMessage(['type' => 'success', 'text' => 'Solicitud enviada con éxito, pronto sabrás algo, gracias!😊']);
	}
	public function makeRevisor(User $user){
		Artisan::call('shareandbuy:makeUserRevisor{email}',['email' => $user->email]);
		return redirect()->route('home')->withMessage(['type'=>'success', 'text' => 'Ya tenemos un compañero más']);
}

    public function acceptAd(Ad $ad)
	{
		$ad->is_accepted = true;
		$ad->save();
		return redirect()->back()->withMessage(['type'=>'success','text'=>'Anuncio aceptado']);
	}
	
    public function rejectAd(Ad $ad)
	{
		$ad->is_accepted = false;
		$ad->save();
		return redirect()->back()->withMessage(['type'=>'danger','text'=>'Anuncio rechazado']);
	}
}
