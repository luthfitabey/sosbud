<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sasaran;
use Carbon\Carbon;

class SasaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_tujuan'=>'1', 'deskripsi_sasaran'=>'Meningkatnya Kualitas dan Akses Pendidikan'],
            ['id_tujuan'=>'1', 'deskripsi_sasaran'=>'Meningkatnya Kualitas dan Akses Kesehatan'],
            ['id_tujuan'=>'1', 'deskripsi_sasaran'=>'Meningkatnya Daya Beli Masyarakat'],     
            ['id_tujuan'=>'2', 'deskripsi_sasaran'=>'Meningkatnya ketaatan masyarakat terhadap Peraturan Daerah'],     
            ['id_tujuan'=>'3', 'deskripsi_sasaran'=>'Terwujudnya birokrasi yang bersih, akuntabel, dan melayani'],     
            ['id_tujuan'=>'4', 'deskripsi_sasaran'=>'Meningkatnya kontribusi sektor-sektor unggulan dalam mendukung pertumbuhan ekonomi'],     
            ['id_tujuan'=>'4', 'deskripsi_sasaran'=>'Terjaganya stabilitas harga barang kebutuhan pokok dan barang penting'],     
            ['id_tujuan'=>'4', 'deskripsi_sasaran'=>'Meningkatnya industri pariwisata'],     
            ['id_tujuan'=>'5', 'deskripsi_sasaran'=>'Meningkatnya Aksesbilitas Ekonomi Masyarakat Yang Berkelanjutan'],     
            ['id_tujuan'=>'5', 'deskripsi_sasaran'=>'Meningkatnya akses penduduk terhadap air minum dan sanitasi layak'],     
            ['id_tujuan'=>'5', 'deskripsi_sasaran'=>'Meningkatkan kualitas pelayanan Lalu Lintas dan ANgkatan Jalan (LLAJ)'],     
            ['id_tujuan'=>'5', 'deskripsi_sasaran'=>'Meningkatnya kualitas lingkungan hidup'],     
            ['id_tujuan'=>'6', 'deskripsi_sasaran'=>'Meningkatnya kuantitas dan kualitas seni budaya lokal'],     
            ['id_tujuan'=>'6', 'deskripsi_sasaran'=>'Menguatkan Ketahanan Sosial Masyarakat'],     
            ['id_tujuan'=>'6', 'deskripsi_sasaran'=>'Meningkatnya kerukunan antar-umat beragama'],     
            ['id_tujuan'=>'7', 'deskripsi_sasaran'=>'Meningkatnya Kesempatan Kerja Masyarakat'],     
            ['id_tujuan'=>'7', 'deskripsi_sasaran'=>'Menurunnya Angka Kemiskinan'],     
            ['id_tujuan'=>'7', 'deskripsi_sasaran'=>'Meningkatnya pengarusutamaan gender dalam pembangunan'],     
            ['id_tujuan'=>'8', 'deskripsi_sasaran'=>'Meningkatnya kemandirian keuangan daerah']  
        ];

        foreach($data as $value){
            Sasaran::insert([
                'id_tujuan' => $value['id_tujuan'],
                'deskripsi_sasaran' => $value['deskripsi_sasaran'],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]);
        };
    }
}
