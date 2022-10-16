<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Eselon1;
use App\Models\Satker;
use Illuminate\Http\Request;

class Eselon1Controller extends Controller
{

    public function index()
    {
        return Eselon1::all();
    }

    public function satkerIndex($eselon1_id)
    {
        return Satker::where('eselon1_id', $eselon1_id)->get();
    }

    public function akunIndex($eselon1_id)
    {
        return Akun::where('eselon1_id', $eselon1_id)->get();
    }
}
