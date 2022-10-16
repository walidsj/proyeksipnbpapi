<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'nip' => env('ADMIN_KEY'),
            'nama' => env('ADMIN_NAMA'),
            'role' => env('ADMIN_ROLE')
        ]);
    }
}
