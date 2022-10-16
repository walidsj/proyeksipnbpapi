<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnbp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eselon1_id');
            $table->unsignedBigInteger('satker_id');
            $table->unsignedBigInteger('akun_id');
            $table->unsignedInteger('tahun');
            $table->unsignedInteger('bulan');
            $table->text('uraian');
            $table->unsignedDecimal('proyeksi', 16, 2);
            $table->unsignedDecimal('realisasi', 16, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pnbp');
    }
};
