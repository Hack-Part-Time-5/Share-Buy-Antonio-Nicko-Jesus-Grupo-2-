<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdController extends Controller
{
    public function __construct(){
        $this->middelware('auth');
    }
    public function create(){
        return view('ads.create');
    }
}
