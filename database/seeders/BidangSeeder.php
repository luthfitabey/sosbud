<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bidang;
use Carbon\Carbon;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_bidang'=>'Sekretariat'],
            ['nama_bidang'=>'Bidang Perencanaan, Pengendalian, dan Evaluasi Pembangunan'],
            ['nama_bidang'=>'Bidang Pemerintahan dan Pembangunan Manusia'],
            ['nama_bidang'=>'Bidang Perekonomian, Sumber Daya Alam, Infrastruktur, dan Kewilayahan'],
            ['nama_bidang'=>'Bidang Penelitian dan Pengembangan']
        ];

        foreach($data as $value){
            Bidang::insert([
                'nama_bidang' => $value['nama_bidang'],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]);
        };
    }
}
