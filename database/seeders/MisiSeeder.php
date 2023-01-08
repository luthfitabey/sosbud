<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Misi;
use Carbon\Carbon;

class MisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_visi'=>'1', 'deskripsi_misi'=>'Misi 1 : Mewujudkan SDM berkualitas melalui peningkatan akses dan kualitas pendidikan dan pelayanan kesehatan'],
            ['id_visi'=>'1', 'deskripsi_misi'=>'Misi 2 : Mewujudkan ketertiban, supremasi hukum dan HAM'],
            ['id_visi'=>'1', 'deskripsi_misi'=>'Misi 3 : Mewujudkan pemerintah daerah yang efektif, demokratis, bersih, profesional dan adil dalam melayani masyarakat'],
            ['id_visi'=>'1', 'deskripsi_misi'=>'Misi 4 : Mewujudkan ekonomi daerah yang mandiri, berdaya saing, berkeadilan dan berbasis pada ekonomi kerakyatan melalui peningkatan fasilitas pembangunan infrasrtuktur daerah'],
            ['id_visi'=>'1', 'deskripsi_misi'=>'Misi 5 : Mewujudkan ketahanan sosial budata dalam kerangka integrasi nasional, pada tatanan mesyarakat yang bermartabat, berakhlak mulia, beretika, dan berbudaya luhur berlandaskan Pancasila'],
            ['id_visi'=>'1', 'deskripsi_misi'=>'Misi 6 : Mewujudkan partisipasi masyarakat melalui pemberian akses dan kesempatan dalam pembangunan'],
            ['id_visi'=>'1', 'deskripsi_misi'=>'Misi 7 : Mewujudkan anggaran pendapatan dan belanja yang lebih mengutamakan kesejahteraan masyarakat']
        ];

        foreach($data as $value){
            Misi::insert([
                'deskripsi_misi' => $value['deskripsi_misi'],
                'id_visi' => $value['id_visi'],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]);
        };
    }
}
