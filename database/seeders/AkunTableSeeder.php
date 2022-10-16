<?php

namespace Database\Seeders;

use App\Models\Akun;
use App\Models\Eselon1;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AkunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();
        $data = [
            ["Badan Pengembangan Sumber Daya Manusia Industri", 424112, "Pendapatan Jasa Pelayanan Pendidikan"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 424119, "Pendapatan Jasa Penyediaan Barang dan Jasa Lainnya"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 424911, "Pendapatan Jasa Layanan Perbankan BLU"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 424919, "Pendapatan Lain-lain BLU"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 424922, "Pendapatan BLU Lainnya dari Sewa Gedung"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425122, "Pendapatan dari Penjualan Peralatan dan Mesin"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425129, "Pendapatan dari Pemindahtanganan BMN Lainnya"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425131, "Pendapatan Sewa Tanah, Gedung, dan Bangunan"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425411, "Pendapatan Ujian/Seleksi Masuk Pendidikan"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425412, "Pendapatan Biaya Pendidikan"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425419, "Pendapatan Pendidikan Lainnya"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425421, "Pendapatan Layanan Pendidikan dan/atau Pelatihan"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425699, "Pendapatan Jasa Lainnya"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425764, "Pendapatan Jasa Lembaga Keuangan (Jasa Giro)"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425811, "Pendapatan Denda Penyelesaian Pekerjaan Pemerintah"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425911, "Penerimaan Kembali Belanja Pegawai Tahun Anggaran Yang Lalu"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425912, "Penerimaan Kembali Belanja Barang Tahun Anggaran Yang Lalu"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425913, "Penerimaan Kembali Belanja Modal Tahun Anggaran Yang Lalu"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425999, "Pendapatan Anggaran Lain-lain"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425121, "Pendapatan dari Penjualan Tanah, Gedung, dan Bangunan"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425991, "Penerimaan Kembali Persekot/Uang Muka Gaji"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 424921, "Pendapatan BLU Lainnya dari Sewa Tanah"],
            ["Badan Pengembangan Sumber Daya Manusia Industri", 425792, "Pendapatan Penyelesaian Ganti Kerugian Negara Terhadap Bendahara"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423129, "Pendapatan dari Pemindahtanganan BMN Lainnya"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423216, "Pendapatan Jasa Tenaga, Pekerjaan, Informasi, Pelatihan dan Teknologi Sesuai Dengan Tugas dan Fungsi Masing-Masing Kementerian Negara/Lembaga"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423519, "Pendapatan Pendidikan Lainnya"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423615, "Pendapatan Hasil Pengembalian Uang Negara"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423752, "Pendapatan Denda Penyelesaian Pekerjaan Pemerintah"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423921, "Pendapatan Penyelesaian Tuntutan Ganti Rugi Non Bendahara"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423951, "Penerimaan Kembali Belanja Pegawai Tahun Anggaran Yang Lalu"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423952, "Penerimaan Kembali Belanja Barang Tahun Anggaran Yang Lalu"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423953, "Penerimaan Kembali Belanja Modal Tahun Anggaran Yang Lalu"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423999, "Pendapatan Anggaran Lain-lain"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423221, "Pendapatan Jasa Lembaga Keuangan (Jasa Giro)"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423228, "Pendapatan Biaya Pengurusan Piutang dan Lelang Negara"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423291, "Pendapatan Jasa Lainnya"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 423956, "Penerimaan Kembali Belanja Hibah Tahun Anggaran Yang Lalu"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425129, "Pendapatan dari Pemindahtanganan BMN Lainnya"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425283, "Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Perindustrian"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425421, "Pendapatan Layanan Pendidikan dan/atau Pelatihan"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425699, "Pendapatan Jasa Lainnya"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425764, "Pendapatan Jasa Lembaga Keuangan (Jasa Giro)"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425791, "Pendapatan Penyelesaian Tuntutan Ganti Kerugian Negara Terhadap Pegawai Negeri Bukan Bendahara atau Pejabat Lain"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425793, "Pendapatan Penyelesaian Ganti Kerugian Negara Terhadap Pihak Lain/Pihak Ketiga"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425811, "Pendapatan Denda Penyelesaian Pekerjaan Pemerintah"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425911, "Penerimaan Kembali Belanja Pegawai Tahun Anggaran Yang Lalu"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425912, "Penerimaan Kembali Belanja Barang Tahun Anggaran Yang Lalu"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425921, "Penerimaan Kembali Belanja Kontribusi Sosial TAYL"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425999, "Pendapatan Anggaran Lain-lain"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425419, "Pendapatan Pendidikan Lainnya"],
            ["Direktorat Jenderal Industri Kecil, Menengah, dan Aneka", 425691, "Pendapatan Jasa Pengawasan/Pemeriksaan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423121, "Pendapatan dari Penjualan Tanah, Gedung, dan Bangunan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423122, "Pendapatan dari Penjualan Peralatan dan Mesin"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423129, "Pendapatan dari Pemindahtanganan BMN Lainnya"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423141, "Pendapatan Sewa Tanah, Gedung, dan Bangunan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423216, "Pendapatan Jasa Tenaga, Pekerjaan, Informasi, Pelatihan dan Teknologi Sesuai Dengan Tugas dan Fungsi Masing-Masing Kementerian Negara/Lembaga"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423221, "Pendapatan Jasa Lembaga Keuangan (Jasa Giro)"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423291, "Pendapatan Jasa Lainnya"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423511, "Pendapatan Uang Pendidikan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423519, "Pendapatan Pendidikan Lainnya"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423752, "Pendapatan Denda Penyelesaian Pekerjaan Pemerintah"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423922, "Pendapatan Penyelesaian Tuntutan Perbendaharaan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423951, "Penerimaan Kembali Belanja Pegawai Tahun Anggaran Yang Lalu"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423952, "Penerimaan Kembali Belanja Barang Tahun Anggaran Yang Lalu"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423953, "Penerimaan Kembali Belanja Modal Tahun Anggaran Yang Lalu"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423991, "Penerimaan Kembali Persekot/Uang Muka Gaji"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 423999, "Pendapatan Anggaran Lain-lain"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424113, "Pendapatan Jasa Pelayanan Tenaga, Pekerjaan, Informasi, Pelatihan dan TeKnologi"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424311, "Pendapatan Hasil Kerjasama Perorangan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424312, "Pendapatan Hasil Kerja Sama Lembaga/Badan Usaha"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424421, "Pendapatan dari Pelayanan BLU yang bersumber dari Entitas Pemerintah Pusat dalam Satu Kementerian Negara/Lembaga"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424911, "Pendapatan Jasa Layanan Perbankan BLU"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424919, "Pendapatan Lain-lain BLU"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424921, "Pendapatan BLU Lainnya dari Sewa Tanah"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424922, "Pendapatan BLU Lainnya dari Sewa Gedung"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424923, "Pendapatan BLU Lainnya dari Sewa Ruangan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 424924, "Pendapatan BLU Lainnya dari Sewa Peralatan dan Mesin"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425121, "Pendapatan dari Penjualan Tanah, Gedung, dan Bangunan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425122, "Pendapatan dari Penjualan Peralatan dan Mesin"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425129, "Pendapatan dari Pemindahtanganan BMN Lainnya"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425131, "Pendapatan Sewa Tanah, Gedung, dan Bangunan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425132, "Pendapatan Sewa Peralatan dan Mesin"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425283, "Pendapatan Pengujian, Sertifikasi, Kalibrasi, dan Standardisasi di Bidang Perindustrian"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425341, "Pendapatan Pelayanan Pertanahan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425412, "Pendapatan Biaya Pendidikan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425419, "Pendapatan Pendidikan Lainnya"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425421, "Pendapatan Layanan Pendidikan dan/atau Pelatihan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425431, "Pendapatan Layanan Penelitian/Riset dan Pengembangan Iptek"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425436, "Pendapatan Royalti atas Kekayaan Intelektual"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425691, "Pendapatan Jasa Pengawasan/Pemeriksaan"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425692, "Pendapatan Jasa Tenaga, Pekerjaan, dan Informasi"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425699, "Pendapatan Jasa Lainnya"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425764, "Pendapatan Jasa Lembaga Keuangan (Jasa Giro)"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425791, "Pendapatan Penyelesaian Tuntutan Ganti Kerugian Negara Terhadap Pegawai Negeri Bukan Bendahara atau Pejabat Lain"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425792, "Pendapatan Penyelesaian Ganti Kerugian Negara Terhadap Bendahara"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425811, "Pendapatan Denda Penyelesaian Pekerjaan Pemerintah"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425911, "Penerimaan Kembali Belanja Pegawai Tahun Anggaran Yang Lalu"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425912, "Penerimaan Kembali Belanja Barang Tahun Anggaran Yang Lalu"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425913, "Penerimaan Kembali Belanja Modal Tahun Anggaran Yang Lalu"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425991, "Penerimaan Kembali Persekot/Uang Muka Gaji"],
            ["Badan Standardisasi dan Kebijakan Jasa Industri", 425999, "Pendapatan Anggaran Lain-lain"]
        ];

        $insert = [];
        foreach ($data as $d) {
            array_push(
                $insert,
                [
                    'eselon1_id' => Eselon1::where('nama', $d['0'])->first()->id,
                    'kode' => $d['1'],
                    'nama' => $d['2'],
                    'created_at' => $time,
                    'updated_at' => $time,
                ]
            );
        };

        return Akun::insert($insert);
    }
}
