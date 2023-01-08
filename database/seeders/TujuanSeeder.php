<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tujuan;
use Carbon\Carbon;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_misi'=>'1', 'deskripsi_tujuan'=>'Mewujudkan SDM yang berdaya saing dan berkualitas'],
            ['id_misi'=>'2', 'deskripsi_tujuan'=>'Mewujudkan masyarakat taat hukum'],
            ['id_misi'=>'3', 'deskripsi_tujuan'=>'Terwujudnya tata kelola pemerintah yang baik'],
            ['id_misi'=>'4', 'deskripsi_tujuan'=>'Meningkatkan Pertumbuhan Ekonomi'],
            ['id_misi'=>'4', 'deskripsi_tujuan'=>'Menyediakan infrastruktur yang mendukung pembangunan ekonomi dengan memperhatikan lingkungan'],
            ['id_misi'=>'5', 'deskripsi_tujuan'=>'Meningkatkan Kesalehan Sosial'],
            ['id_misi'=>'6', 'deskripsi_tujuan'=>'Meningkatkan akses masyarakat dalam pembangunan serta kesetaraan gender'],
            ['id_misi'=>'7', 'deskripsi_tujuan'=>'Meningkatkan Kemandirian Fiskal Daerah']
        ];

        foreach($data as $value){
            Tujuan::insert([
                'id_misi' => $value['id_misi'],
                'deskripsi_tujuan' => $value['deskripsi_tujuan'],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]);
        };
    }
}
