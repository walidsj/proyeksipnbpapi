<?php

namespace Database\Seeders;

use App\Models\Eselon1;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Eselon1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();

        return Eselon1::insert([
            [
                'nama' => 'Badan Standardisasi dan Kebijakan Jasa Industri',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'nama' => 'Badan Pengembangan Sumber Daya Manusia Industri',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'nama' => 'Direktorat Jenderal Industri Kecil, Menengah, dan Aneka',
                'created_at' => $time,
                'updated_at' => $time,
            ],
        ]);
    }
}
