<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Controller;

class PublicController extends Controller
{
    public function index()
    {
      return view('welcome');
    }
}
