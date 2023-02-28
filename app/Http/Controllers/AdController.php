<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function __construct(){
        $this->middelware('auth');
    }
    public function create(){
        return view('ads.create');
    }
}
