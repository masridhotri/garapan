<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function index(){
        $data = Tamu::all();
         return view('pengunjung', compact('data'));
    }
   
    public function tamu(){
        return view('home');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        Tamu::create($request->all());
        return redirect()->route('home');
    }
}
