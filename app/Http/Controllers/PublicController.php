<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Controller;
use Laravel\Scout\Searchable;

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
      return view('search_results', compact('q', 'ads'));  
      
    }
    public function list()
    {
      $ads = Ad::where('is_accepted',true)->orderBy('created_at', 'desc')->get();
      return view('list', compact('ads'));
    }
    public function contact()
    {
      return view('contact');
    }
} 


/*  public function search($q)
    {
      dd(Ad::search($q)->get());
    }
} */ 
