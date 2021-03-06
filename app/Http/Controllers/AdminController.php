<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AdminController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function admin()
   {
       return view('admin');
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function clientes()
   {
       $userId = Auth::id();

       return  view('web.clientes')->with('userId', $userId);
   }

}
