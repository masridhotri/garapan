<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){    
        $tamus = Tamu::count();
        $haris = Tamu::whereDate('tanggal', Carbon::today())->count();
        $minggus = Tamu::whereBetween('tanggal', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $bulans = Tamu::whereMonth('tanggal', Carbon::now()->month)
        ->whereYear('tanggal', Carbon::now()->year)
        ->count();
         return view('pages.master', compact('tamus','haris','minggus','bulans'));
       
    }
     public function getChartData()
    {
        // Assuming you have a 'visits' table with 'month' and 'visitor_count' columns
        $data = Tamu::selectRaw('MONTH(created_at) as month, COUNT(*) as visitor_count')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Format the data into an array of months and visitor counts
        $months = [];
        $visitorCounts = [];
        
        foreach ($data as $entry) {
            $months[] = $entry->month;
            $visitorCounts[] = $entry->visitor_count;
        }

        return response()->json([
            'months' => $months,
            'visitor_counts' => $visitorCounts,
        ]);
    }
}
