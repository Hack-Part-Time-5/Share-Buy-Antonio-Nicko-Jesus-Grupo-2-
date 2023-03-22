<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Maize\Markable\Models\Favorite;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function wishlist()
    {
        $ads = Ad::whereHasFavorite(auth()->user())->get(); 
        return view('wishlist',compact('ads'));
    } 
    public function favoriteAdd($id)
    {
        $ad = Ad::find($id);
        $user = auth()->user();
        Favorite::add($ad, $user);
        session()->flash('success', 'Producto añadido a favoritos correctamente!');

        return redirect()->route('wishlist');
        return redirect()->route('wishlist');
    }
    public function favoriteRemove($id)
    {
        $product = Ad::find($id);
        $user = auth()->user();
        Favorite::remove($product, $user);
        session()->flash('success', 'Product is Remove to Favorite Successfully !');

        return redirect()->route('wishlist');
    } 
    
}



/* <form action="{{ route('favorite.add', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <button class="p-2 bg-red-100 rounded hover:bg-red-600">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-700 hover:text-red-100">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
    </svg>

                        </button>
</form> */