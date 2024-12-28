<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use Illuminate\Support\Carbon;


class StatisController extends Controller
{
    
    public function index(){    
        $tamu = Tamu::count();
        $hari = Tamu::whereDate('tanggal', Carbon::today())->count();
        $minggu = Tamu::whereBetween('tanggal', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $bulan = Tamu::whereMonth('tanggal', Carbon::now()->month)
        ->whereYear('tanggal', Carbon::now()->year)
        ->count();
         return view('pages.tabel', compact('tamu','hari','minggu','bulan'));
       
    }
   


}