<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ad;

class AdController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('ad.create');
    }
}
