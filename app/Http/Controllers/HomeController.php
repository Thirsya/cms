<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;


 class HomeController extends Controller
 {
    //  public function index(){
    //      return view('home', ['contacts'=>contact::index()]);
    //  }

    //   public function index(){
    //      return view('logout');
    //   }

     public function index(){
         $user = Auth::user();
         return view('logout',['user' => $user]);
     }
}

