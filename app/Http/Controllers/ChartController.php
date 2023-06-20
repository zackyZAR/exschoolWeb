<?php

namespace App\Http\Controllers;
use App\Models\Pemilih;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function getExschoolCounts()
{
    $exschoolCounts = Pemilih::select('exschool', DB::raw('COUNT(*) as total'))
        ->groupBy('exschool')
        ->pluck('total', 'exschool')
        ->toArray();

    return $exschoolCounts;
}


    public function showChart()
{
    $exschoolCounts = $this->getExschoolCounts();

    return view('chart')->with('exschoolCounts', $exschoolCounts);
}

}
