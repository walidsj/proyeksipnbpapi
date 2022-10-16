<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{

    protected $table = 'satker';

    protected $fillable = [
        'eselon1_id',
        'kode',
        'nama',
    ];

    public function eselon1()
    {
        return $this->belongsTo(Eselon1::class);
    }
}
