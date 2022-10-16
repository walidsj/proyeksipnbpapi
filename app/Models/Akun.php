<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{

    protected $table = 'akun';

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
