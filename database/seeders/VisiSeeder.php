<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Visi;
use Carbon\Carbon;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['deskripsi_visi'=>'Terwujudnya Kota Mojokerto yang Berdaya Saing, Mandiri, Demokratis, Adil, Makmur, Sejahtera dan Bermartabat']
        ];

        foreach($data as $value){
            Visi::insert([
                'deskripsi_visi' => $value['deskripsi_visi'],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]);
        };
    }
}
