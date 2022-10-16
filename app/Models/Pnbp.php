<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pnbp extends Model
{

    protected $table = 'pnbp';

    protected $fillable = [
        'eselon1_id',
        'satker_id',
        'akun_id',
        'tahun',
        'bulan',
        'uraian',
        'proyeksi',
        'realisasi',
    ];

    public $appends = [
        'deviasi',
        'bulan_nama'
    ];

    public function getDeviasiAttribute()
    {
        return ($this->realisasi - $this->proyeksi) / $this->realisasi;
    }

    public function getBulanNamaAttribute()
    {
        return Carbon::create()->month($this->bulan)->monthName;
    }

    public function akun()
    {
        return $this->belongsTo(Akun::class);
    }

    public function eselon1()
    {
        return $this->belongsTo(Eselon1::class);
    }

    public function satker()
    {
        return $this->belongsTo(Satker::class);
    }
}
