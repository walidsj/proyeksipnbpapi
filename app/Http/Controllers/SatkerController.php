<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Satker;
use Illuminate\Http\Request;

class SatkerController extends Controller
{

    public function index()
    {
        return Satker::with(['eselon1'])->get();
    }

    public function akunIndex($satker_id)
    {
        $satker = Satker::where('id', $satker_id)->first();
        return Akun::where('eselon1_id', $satker->eselon1_id)->get();
    }
}
