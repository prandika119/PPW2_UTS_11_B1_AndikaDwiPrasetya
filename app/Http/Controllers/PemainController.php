<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index()
    {
        $pemains = Pemain::all();
        return view('home', compact('pemains'));
    }
}
