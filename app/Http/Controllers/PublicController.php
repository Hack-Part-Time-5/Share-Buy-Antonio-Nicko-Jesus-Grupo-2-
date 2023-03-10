<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Controller;

class PublicController extends Controller
{
    public function index()
    {
      $ads = Ad::where('is_accepted',true)->orderBy('created_at', 'desc')->take(6)->get();
     /*  dd($ads[0]->user->name); */
      return view('welcome', compact('ads'));
    }
    public function adsByCategory(Category $category){
      $ads = $category->ads()->where('is_accepted',true)->latest()->paginate(6);
      return view('ad.by-category', compact('category', 'ads'));
    }
    
    public function setLocale($locale)
    {
      session()->put('locale', $locale);
      return redirect()->back();
    }
} 
