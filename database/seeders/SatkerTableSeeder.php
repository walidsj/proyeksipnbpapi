<?php

namespace Database\Seeders;

use App\Models\Eselon1;
use App\Models\Satker;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SatkerTableSeeder extends Seeder
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
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '248042', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Tekstil'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247246', 'Balai Standardisasi dan Pelayanan Jasa Industri Manado'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '412528', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Kimia, Farmasi, dan Kemasan'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247225', 'Balai Standardisasi dan Pelayanan Jasa Industri Medan'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '015118', 'Balai Standardisasi dan Pelayanan Jasa Industri Jakarta'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247211', 'Balai Standardisasi dan Pelayanan Jasa Industri Surabaya'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '539053', 'Balai Standardisasi dan Pelayanan Jasa Industri Padang'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '539060', 'Balai Standardisasi dan Pelayanan Jasa Industri Lampung'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '539074', 'Balai Standardisasi dan Pelayanan Jasa Industri Pontianak'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '539081', 'Balai Standardisasi dan Pelayanan Jasa Industri Samarinda'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '578292', 'Pusat Standardisasi'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247403', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Hasil Perkebunan, Mineral Logam, dan Maritim'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '248145', 'Balai Standardisasi dan Pelayanan Jasa Industri Ambon'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '248035', 'Badan Standardisasi dan Pelayanan Jasa Industri'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '417912', 'Balai Standardisasi dan Pelayanan Jasa Industri Pekanbaru'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '248056', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Selulosa'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247140', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Bahan dan Barang Teknik'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247157', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Keramik dan Mineral Nonlogam'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '248060', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Logam dan Mesin'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247136', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Agro'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247161', 'Balai Besar Standardisasi dan Pelayanan Jasa Pencegahan Pencemaran Industri'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247199', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet, dan Plastik'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247204', 'Balai Besar Standardisasi dan Pelayanan Jasa Industri Kerajinan dan Batik'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '248124', 'Balai Standardisasi dan Pelayanan Jasa Industri Banda Aceh'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '248920', 'Balai Standardisasi dan Pelayanan Jasa Industri Palembang'],
            ['Badan Standardisasi dan Kebijakan Jasa Industri', '247232', 'Balai Standardisasi dan Pelayanan Jasa Industri Banjarbaru'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579331', 'Politeknik AKA Bogor'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579332', 'Sekolah Menengah Kejuruan-SMAK Bogor'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579333', 'Politeknik ATK Yogyakarta'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579334', 'Sekolah Menegah Kejuruan-SMTI Yogyakarta'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579335', 'Politeknik ATI Makassar'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579336', 'Sekolah Menengah Kejuruan-SMTI Makassar'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579337', 'Sekolah Menengah Kejuruan-SMAK Makassar'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579338', 'Politeknik STTT Bandung'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579339', 'Balai Diklat Industri Yogyakarta'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579340', 'Balai Diklat Industri Medan'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579341', 'Balai Diklat Industri Makassar'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579342', 'Balai Diklat Industri Denpasar'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579343', 'Balai Diklat Industri Padang'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579344', 'Balai Diklat Industri Surabaya'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579345', 'Sekolah Menengah Kejuruan-SMTI Banda Aceh'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579346', 'Politeknik Teknologi Kimia Industri Medan'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579347', 'Politeknik Industri Logam Morowali'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579348', 'Akademi Komunitas Industri Manufaktur Bantaeng'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579349', 'Politeknik Industri Furnitur dan Pengolahan Kayu Kendal'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579350', 'Politeknik STMI Jakarta'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579351', 'Politeknik APP Jakarta'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579352', 'Akademi Komunitas Industri Tekstil dan Produk Tekstil Surakarta'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579355', 'Sekolah Menengah Kejuruan-SMTI Padang'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579356', 'Sekolah Menengah Kejuruan-SMTI Bandar Lampung'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579357', 'Sekolah Menengah Kejuruan-SMTI Pontianak'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579358', 'Sekolah Menengah Kejuruan-SMAK Padang'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579359', 'Politeknik ATI Padang'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579360', 'Balai Diklat Industri Jakarta'],
            ['Badan Pengembangan Sumber Daya Manusia Industri', '579361', 'Badan Pengembangan Sumber Daya Manusia Industri'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '417681', 'Dinas Perindustrian, Perdagangan, Koperasi, dan UMKM'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '109207', 'Dinas Perindustrian dan Perdagangan Jambi'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '089264', 'Dinas Perindustrian dan Perdagangan Provinsi Sumatera Barat'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '049131', 'Dinas Perindustrian dan Perdagangan DIY'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '359901', 'Dinas Perindustrian, Perdagangan, Koperasi, dan UMKM'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '169024', 'Dinas Perindustrian, Perdaganan, dan Koperasi Provinsi Kalimantan Timur'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '139243', 'Dinas Perindustrian, Perdagangan, Energi, dan Sumber Daya Mineral Provinsi Kalimantan Barat'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '159191', 'Dinas Perindustrian Provinsi Kalimantan Selatan'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '149215', 'Dinas Perdagangan dan Perindustrian Provinsi Kalimantan Tengah'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '247952', 'Balai Pemberdayaan Industri Persepatuan Indonesia'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '247949', 'Direktorat Jenderal Industri Kecil, Menengah, dan Aneka'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '059029', 'Dinas Perindustrian dan Perdagangan Jawa Timur'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '249294', 'Dinas Perindustrian dan Perdagangan Provinsi Nusa Tenggara Timur'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '129024', 'Dinas Perindustrian dan Perdagangan Provinsi Lampung'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '189023', 'Dinas Perindustrian dan Perdagangan Provinsi Sulawesi Tengah'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '199022', 'Dinas Perindustrian Provinsi Sulawesi Selatan'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '219024', 'Dinas Perindustrian dan Perdagangan Maluku'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '309208', 'Dinas Perindustrian dan Perdagangan Prov. Kepulauan Bangka Belitung'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '079019', 'Dinas Perindustrian dan Perdagangan Provinsi Sumatera Utara'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '329115', 'Dinas Perindustrian dan Perdagangan Prov. Kepulauan Riau'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '019070', 'Dinas Perindustrian dan Energi Provinsi DKI Jakarta'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '289168', 'Dinas Perindustrian dan Perdagangan Maluku Utara'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '209188', 'Dinas Perindustrian dan Perdagangan Sulawesi Tenggara'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '179214', 'Dinas Perindustrian dan Perdagangan Sulawesi Utara'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '339152', 'Dinas Perindustrian dan Perdagangan Prov. Papua Barat'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '229163', 'Dinas Perindustrian dan Perdagangan Bali'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '299435', 'Dinas Perindustrian dan Perdagangan Banten'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '099026', 'Dinas Perindustrian, Perdagangan, Koperasi, Usaha Kecil dan Menengah Provinsi Riau'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '269188', 'Dinas Perindustrian dan Perdagangan Bengkulu'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '039032', 'Dinas Perindustrian dan Perdagangan Provinsi Jawa Tengah'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '319144', 'Dinas Koperasi, Perindustrian, dan Perdagangan Prov. Gorontalo'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '029024', 'Dinas Perindustrian dan Perdagangan Jawa Barat'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '239033', 'Dinas Perindustrian Provinsi Nusa Tenggara Barat'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '119028', 'Dinas Perindustrian Provinsi Sumatera Selatan'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '069263', 'Dinas Perindustrian, Perdagangan, Koperasi, dan UKM Provinsi Nanggroe Aceh Darussalam'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '340163', 'Dinas Perindustrian dan Perdagangan Prov. Sulawesi Barat'],
            ['Direktorat Jenderal Industri Kecil, Menengah, dan Aneka', '259247', 'Dinas Perindustrian, Perdagangan, Koperasi, UMK, dan Tenagara kerja Provinsi Papua']
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

        return Satker::insert($insert);
    }
}
