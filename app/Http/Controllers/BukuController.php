<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
class BukuController extends Controller
{
    public function index228()
    {
        $no = 1;
        $no2 = 1;
        $no3 = 1;
        $no4 = 1;
        $data = Buku::get();
        $data2 = Buku::where('jumlah_buku','>','3')->get();
        $data3 = Buku::with('penerbit')->get();
        $data4 = Buku::with('penerbit')->where('jumlah_buku','>','3')->get();
        return view('index228',compact('no','no2','no3','no4','data','data2','data3','data4'));
    }
}
