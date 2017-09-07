<?php

namespace App\Http\Controllers;

use App\fotografia;
use Illuminate\Http\Request;

class Pages extends Controller
{
   public function Home() 
   {
   		$fotos = fotografia::all();
   		return view('home', ['fotos' => $fotos]);
   }
}
