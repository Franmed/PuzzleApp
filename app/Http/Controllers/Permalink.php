<?php

namespace App\Http\Controllers;

use App\fotografia;
use Illuminate\Http\Request;

class Permalink extends Controller
{
    public function Show($id)
    {
    	$foto = fotografia::find($id);
    	return view('show', ['foto' => $foto]);
    }
}
