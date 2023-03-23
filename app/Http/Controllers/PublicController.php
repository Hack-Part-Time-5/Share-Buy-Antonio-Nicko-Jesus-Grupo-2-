<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Laravel\Scout\Searchable;
use Illuminate\Routing\Controller;
use Maize\Markable\Models\Favorite;
use PhpParser\Node\Stmt\If_;

class PublicController extends Controller
{
    public function index()
    {
      $ads = Ad::where('is_accepted',true)->orderBy('created_at', 'desc')->take(8)->get();
     /*  dd($ads[0]->user->name); */
      return view('welcome', compact('ads'));
    }
    public function adsByCategory(Category $category){
      $ads = $category->ads()->where('is_accepted',true)->latest()->paginate(8);
      return view('ad.by-category', compact('category', 'ads'));
    }

    public function avisolegal(){
      return view ('avisolegal');
    }

    public function terminos(){
      return view ('terminos');
    }

    public function politicaprivacidad(){
      return view ('politicaprivacidad');
    }
    
    public function cookies(){
      return view ('cookies');
    }
    

    public function setLocale($locale)
    {
      session()->put('locale', $locale);
      return redirect()->back();
    }
    public function search(Request $request)
    {
      $q = $request->input('q');
      $ads = Ad::search($q)
        ->where('is_accepted', true)
        ->get();
      return view('ad.search_results', compact('q', 'ads'));  
      
    } 
    /* public function search($q)
    {
      dd(Ad::search($q)->get());
    } */
    public function list()
    {
      $ads = Ad::where('is_accepted',true)->orderBy('created_at', 'desc')->get();
      return view('list', compact('ads'));
    }
    public function contact()
    {
      return view('contact');
    }
    public function adsByUser(User $user)
    {
      $ads = $user->ads()->get();
      return view('ad.by-user', compact ('user', 'ads'));
    }







    public function wishlist()
    {
        $ads = Ad::whereHasFavorite(auth()->user())->get(); 
        return view('wishlist',compact('ads'));
    } 
    public function favoriteAdd($id)
    {
      if ($user = auth()->user()) {
        $ad = Ad::find($id);
        $user = auth()->user();
        Favorite::add($ad, $user);
        session()->flash('success', 'Producto añadido a favoritos correctamente!');
        return redirect()->route('wishlist');
      }else {
        return redirect()->route('login');
      }
      /* $ad = Ad::find($id);
      $user = auth()->user();
      Favorite::add($ad, $user);
      session()->flash('success', 'Producto añadido a favoritos correctamente!');

      return redirect()->route('wishlist');
         */
        
    }
    public function favoriteRemove($id)
    {
        $ad = Ad::find($id);
        $user = auth()->user();
        Favorite::remove($ad, $user);
        session()->flash('success', 'Product is Remove to Favorite Successfully !');

        return redirect()->route('wishlist');
    }
} 



 
