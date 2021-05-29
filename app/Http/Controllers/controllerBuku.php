<?php

namespace App\Http\Controllers;

use App\Models\ms_buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerBuku extends Controller
{
    public function buku()
    {
        $buku = DB::table('ms_buku')->get();
        return view('buku0180', ['ms_buku'=>$buku]);
    }
    public function index()
    {
        
    }

}
