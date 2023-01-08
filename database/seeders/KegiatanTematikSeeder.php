<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KegiatanTematik;
use Carbon\Carbon;

class KegiatanTematikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_sub_bidang'=>'7', 'nama_kegiatan_tematik'=>'Germas'],
            ['id_sub_bidang'=>'7', 'nama_kegiatan_tematik'=>'Stunting'],
            ['id_sub_bidang'=>'7', 'nama_kegiatan_tematik'=>'ATM'],
            ['id_sub_bidang'=>'7', 'nama_kegiatan_tematik'=>'Kota Sehat'],
            ['id_sub_bidang'=>'7', 'nama_kegiatan_tematik'=>'Ranham'],
            ['id_sub_bidang'=>'7', 'nama_kegiatan_tematik'=>'SDGs'],
            ['id_sub_bidang'=>'8', 'nama_kegiatan_tematik'=>'Gender'],
            ['id_sub_bidang'=>'8', 'nama_kegiatan_tematik'=>'KLA'],
            ['id_sub_bidang'=>'8', 'nama_kegiatan_tematik'=>'IPM'],
            ['id_sub_bidang'=>'8', 'nama_kegiatan_tematik'=>'Kebudayaan'],
            ['id_sub_bidang'=>'8', 'nama_kegiatan_tematik'=>'Pendidikan'],
            ['id_sub_bidang'=>'8', 'nama_kegiatan_tematik'=>'Kemiskinan']
        ];

        foreach($data as $value){
            KegiatanTematik::insert([
                'id_sub_bidang' => $value['id_sub_bidang'],
                'nama_kegiatan_tematik' => $value['nama_kegiatan_tematik'],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]);
        };
    }
}
