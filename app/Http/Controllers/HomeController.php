<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $tamus = Tamu::count();
        $haris = Tamu::whereDate('tanggal', Carbon::today())->count();
        $minggus = Tamu::whereBetween('tanggal', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $bulans = Tamu::whereMonth('tanggal', Carbon::now()->month)
            ->whereYear('tanggal', Carbon::now()->year)
            ->count();
        return view('pages.master', compact('tamus', 'haris', 'minggus', 'bulans'));
    }
    public function getChartData()
    {
        // Assuming you have a 'visits' table with 'month' and 'visitor_count' columns
        $data = DB::table('tamus') // Ganti dengan nama tabel Anda
            ->select(DB::raw('MONTH(tanggal) as month'), DB::raw('COUNT(*) as total'))
            ->groupBy('month')
            ->get();

        // Membuat array untuk bulan dan jumlah data
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $visitorCounts = array_fill(0, 12, 0); // Awalnya set semua bulan ke 0

        foreach ($data as $row) {
            $visitorCounts[$row->month - 1] = $row->total; // Isi jumlah data per bulan
        }

        return response()->json([
            'months' => $months,
            'visitor_counts' => $visitorCounts
        ]);
    }
}
