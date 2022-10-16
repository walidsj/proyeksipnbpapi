<?php

namespace App\Http\Controllers;

use App\Models\Pnbp;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PnbpController extends Controller
{

    public function index(Request $request)
    {
        $this->validate($request, [
            'tahun' => 'required',
            'bulan_awal' => 'required',
            'bulan_akhir' => 'required',
            'eselon1_id' => 'nullable',
            'satker_id' => 'nullable',
        ]);

        $pnbp = Pnbp::with(['eselon1', 'satker', 'akun'])
            ->where('tahun', $request->tahun)
            ->where('bulan', '>=', $request->bulan_awal)
            ->where('bulan', '<=', $request->bulan_akhir)
            ->when($request->eselon1_id, function ($q) use ($request) {
                $q->where('eselon1_id', $request->eselon1_id);
            })
            ->when($request->satker_id, function ($q) use ($request) {
                $q->where('satker_id', $request->satker_id);
            })
            ->get();

        return response()->json([
            'data' => $pnbp,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'eselon1_id' => 'required',
            'satker_id' => 'required',
            'akun_id' => 'required',
            'tahun' => 'required',
            'bulan' => 'required',
            'uraian' => 'required',
            'proyeksi' => 'required',
            'realisasi' => 'required',
        ]);

        $pnbp = Pnbp::create($request->all());

        if (!$pnbp)
            return response()->json(['message' => 'Data tidak dapat ditambah karena salah teknis.'], 500);

        return response()->json([
            'message' => 'Data berhasil ditambah.',
            'data' => $pnbp,
        ]);
    }
}
