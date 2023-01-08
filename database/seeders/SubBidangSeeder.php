<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubBidang;
use Carbon\Carbon;

class SubBidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_sub_bidang'=>'Sub Bagian Penyusunan Program', 'id_bidang'=>'1'],
            ['nama_sub_bidang'=>'Sub Bagian Keuangan', 'id_bidang'=>'1'],
            ['nama_sub_bidang'=>'Sub Bagian Umum dan Kepegawaian', 'id_bidang'=>'1'],
            ['nama_sub_bidang'=>'Sub Bidang Perencaanaan dan Pendanaan', 'id_bidang'=>'2'],
            ['nama_sub_bidang'=>'Sub Bidang Data dan Informasi', 'id_bidang'=>'2'],
            ['nama_sub_bidang'=>'Sub Bidang Pengendalian, Evaluasi, dan Pelaporan', 'id_bidang'=>'2'],
            ['nama_sub_bidang'=>'Sub Bidang Pemerintahan', 'id_bidang'=>'3'],
            ['nama_sub_bidang'=>'Sub Bidang Pembangunan Manusia', 'id_bidang'=>'3'],
            ['nama_sub_bidang'=>'Sub Bidang Perekonomian', 'id_bidang'=>'4'],
            ['nama_sub_bidang'=>'Sub Bidang Sumber Daya Alam', 'id_bidang'=>'4'],
            ['nama_sub_bidang'=>'Sub Bidang Infrastruktur dan Kewilayahan', 'id_bidang'=>'4'],
            ['nama_sub_bidang'=>'Sub Bidang Penelitian Pemerintah, Pengkajian Peraturan, Sosial dan Kependudukan', 'id_bidang'=>'5'],
            ['nama_sub_bidang'=>'Sub Bidang Penelitian Ekonomi dan Pembangunan', 'id_bidang'=>'5'],
            ['nama_sub_bidang'=>'Sub Bidang Inovasi dan Teknologi', 'id_bidang'=>'5']
        ];

        foreach($data as $value){
            SubBidang::insert([
                'id_bidang' => $value['id_bidang'],
                'nama_sub_bidang' => $value['nama_sub_bidang'],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]);
        };
    }
}
