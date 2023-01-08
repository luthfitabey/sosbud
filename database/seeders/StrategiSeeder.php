<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Strategi;
use Carbon\Carbon;

class StrategiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_sasaran'=>'1', 'deskripsi_strategi'=>'Meningkatkan akses dan kualitas layanan PAUD'],   
            ['id_sasaran'=>'1', 'deskripsi_strategi'=>'Melaksanakan Wajib Belajar 12 Tahun dengan melanjutkan upaya untuk memenuhi hak seluruh penduduk mendapatkan layanan pendidikan dasar sembilan tahun berkualitas'],   
            ['id_sasaran'=>'1', 'deskripsi_strategi'=>'Percepatan penyesuaian pelayanan pendidikan di era normal baru'],   
            ['id_sasaran'=>'1', 'deskripsi_strategi'=>'Meningkatkan profesionalisme, kualitas, dan akuntabilitas guru dan tenaga kependidikan'],   
            ['id_sasaran'=>'1', 'deskripsi_strategi'=>'Meningkatkan budaya gemar membaca'],   
            ['id_sasaran'=>'1', 'deskripsi_strategi'=>'Meningkatkan partisipasi pemuda dalam pembangunan'],   
            ['id_sasaran'=>'1', 'deskripsi_strategi'=>'Meningkatkan partisipasi masyarakat dalam kegiatan olahraga'],  
            ['id_sasaran'=>'2', 'deskripsi_strategi'=>'Meningkatkan status derajat kesehatan dengan Pendekatan Keluarga untuk setiap golongan umur dan mengikuti siklus hidupmanusia'],   
            ['id_sasaran'=>'2', 'deskripsi_strategi'=>'Intervensi Kesehatan Berbasis Risiko'],   
            ['id_sasaran'=>'2', 'deskripsi_strategi'=>'Meningkatkan pemenuhan sumber daya kesehatan dengan Pendekatan Pelayanan Keberlanjutan (Continuum of Care)'],   
            ['id_sasaran'=>'2', 'deskripsi_strategi'=>'Meningkatkan aksebilitas dan kualitas Pelayanan Kesehatan, khusus-nya Pelayanan Kesehatan Primer (Primary Health Care)'],   
            ['id_sasaran'=>'2', 'deskripsi_strategi'=>'Meningkatkan standar elayanan Rumah Sakit Sesuai dengan standar akreditasi Rumah Sakit'],   
            ['id_sasaran'=>'2', 'deskripsi_strategi'=>'Meningkatkan pelayanan keluarga berencana dan kesehatan reproduksi'],   
            ['id_sasaran'=>'3', 'deskripsi_strategi'=>'Meningkatkan ketersediaan, akses pangan masyarakat, kualitas, keragaman dan keamanan pangan'],   
            ['id_sasaran'=>'4', 'deskripsi_strategi'=>'Meningkatkan kesadaran masayarakat terhadap peraturan hukum melalui penegakan peraturan daerah dan pencegahan pelanggaran peraturan daerah'],   
            ['id_sasaran'=>'4', 'deskripsi_strategi'=>'Meningkatkan pengendalian keamanan dan kenyamanan lingkungan sera kesadaran masyarakat terhadap potensi bencana'],   
            ['id_sasaran'=>'5', 'deskripsi_strategi'=>'Meningkatkan keterbukaan informasi dan komunikasi publik'],   
            ['id_sasaran'=>'5', 'deskripsi_strategi'=>'Meningkatkan tata kelola pemerintahan yang efektif'],   
            ['id_sasaran'=>'5', 'deskripsi_strategi'=>'Menata sistem hukum di daerah'],   
            ['id_sasaran'=>'5', 'deskripsi_strategi'=>'Meningkatnya pemahaman masyarakat tentang hak dan kewajiban politik sebagai warga Negara'],   
            ['id_sasaran'=>'5', 'deskripsi_strategi'=>'Meningkatkan profesionalitas Aparatur Pemerintah Daerah'],   
            ['id_sasaran'=>'5', 'deskripsi_strategi'=>'Meningkatkan Kualitas Pelayanan Publik'],   
            ['id_sasaran'=>'6', 'deskripsi_strategi'=>'Meningkatkan pertumbuhan investasi'],   
            ['id_sasaran'=>'6', 'deskripsi_strategi'=>'Meningkatkan kualitas kelembagaan serta produktivitas koperasi dan usaha mikro'],   
            ['id_sasaran'=>'6', 'deskripsi_strategi'=>'Meningkatkan produksi, inovasi dan nilai tambah hasil pertanian, perikanan, dan peternakan'],   
            ['id_sasaran'=>'7', 'deskripsi_strategi'=>'Meningkatkan sistem dan jaringan distribusi barang, pengembangan pasar dalam negeri, serta perlindungan konsumen dan pasar tradisional'],   
            ['id_sasaran'=>'7', 'deskripsi_strategi'=>'Meningkatkan daya saing industri'],   
            ['id_sasaran'=>'8', 'deskripsi_strategi'=>'Meningkatkan keunggulan, daya tarik dan promosi pariwisata untuk peningkatan daya beli'],   
            ['id_sasaran'=>'9', 'deskripsi_strategi'=>'Meningkatkan kondisi infrastruktur jalan guna mendukung pelayanan pergerakan orang dan barang'],   
            ['id_sasaran'=>'9', 'deskripsi_strategi'=>'Meningkatkan kondisi infrastruktur sumber daya air dan irigasi, pendayagunaan sumber daya air, serta pengendalian daya rusak air'],   
            ['id_sasaran'=>'10', 'deskripsi_strategi'=>'meningkatkan kondisi sarana dan prasarana dasar permukiman'],   
            ['id_sasaran'=>'10', 'deskripsi_strategi'=>'Meningkatkan ketersediaan dan kualitas perumahan'],   
            ['id_sasaran'=>'11', 'deskripsi_strategi'=>'Mengembangkan infrastruktur transportasi perhubungan dalam rangka peningkatan pelayanan pergerakan orang dan barang serta mengembangkan sistem transportasi publik yang nyaman'],   
            ['id_sasaran'=>'12', 'deskripsi_strategi'=>'Meningkatkan ketersediaan dan kualitas perumahan'],   
            ['id_sasaran'=>'12', 'deskripsi_strategi'=>'Meningkatkan proses perencanaan, pemanfaatan dan pengendalian pemanfaatan ruang untuk mewujudkan tata ruang wilayah yang efisien, berkelanjutan dan berdaya saing'],   
            ['id_sasaran'=>'12', 'deskripsi_strategi'=>'Menurunkan beban pencemaran lingkungan dan risiko bencana'],   
            ['id_sasaran'=>'13', 'deskripsi_strategi'=>'Meningkatkan apresiasi terhadap keragaman seni dan kreativitas karya budaya'],   
            ['id_sasaran'=>'13', 'deskripsi_strategi'=>'Melestarikan warisan budaya baik bersifat benda (tangible) maupun tak benda (intangible)'],   
            ['id_sasaran'=>'13', 'deskripsi_strategi'=>'Mengembangkan sumber daya kebudayaan'],   
            ['id_sasaran'=>'14', 'deskripsi_strategi'=>'Meningkatkan kerukunan antar agama dan pemahaman pengamalan agama'],   
            ['id_sasaran'=>'15', 'deskripsi_strategi'=>'Peningkatan peran lembagalembaga sosial keagamaan dan lembaga pendidikan keagamaan dalam pembangunan'],   
            ['id_sasaran'=>'15', 'deskripsi_strategi'=>'meningkatkan pemahaman masyarakat tentang Hak dan kewajiban politik sebagai warga Negara'],   
            ['id_sasaran'=>'15', 'deskripsi_strategi'=>'Memantapkan semangat kebangsaan dan bernegara'],   
            ['id_sasaran'=>'16', 'deskripsi_strategi'=>'Meningkatkan kesempatan kerja terutama di sektor formal serta mendorong produktivitas tenaga kerjayang berkualitas, produktif serta berjiwa wira usaha'],   
            ['id_sasaran'=>'17', 'deskripsi_strategi'=>'Meningkatkan kesempatan kerja terutama di sektor formal serta mendorong produktivitas tenaga kerjayang berkualitas, produktif serta berjiwa wira usaha'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'Meningkatkan peran dan fungsi potensi sumber kesejahteraan sosial (PSKS) dalam penanganan PMKS'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'Mengurangi beban pengeluaran masyarakat miskin'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'Meningkatkan kemampuan dan pendapatan masyarakat miskin'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'Mengembangkan dan menjamin keberlanjutan saha Mikro dan Kecil'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'Mensinergikan kebijakan dan program penanggulangan kemiskinan'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'Meningkatkan keterampilan dalam berwirausaha bagi perempuan'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'Mewujudkan Pengarusutamaan Gender (PUG) dan meningkatkan pemberdayaan perempuan dalam pembangunan'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'Mencegah dan menangani perdagangan perempuan dan anak (trafficking)'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'mewujudkan Pengarusutamaan Hak-hak Anak (PUHA) dan mewujudkan keluarga sehat, sejahtera dan mandiri'],   
            ['id_sasaran'=>'18', 'deskripsi_strategi'=>'Meningkatkan kapasitas pemerintahan desa dan partisipasi masyarakat'],   
            ['id_sasaran'=>'19', 'deskripsi_strategi'=>'Meningkatkan PAD melalui Intensifikasi dan ekstensifikasi potensi pajak daerah secara strategis, akurat, dan tertib dengan Pemanfaatan Teknologi Informasi (IT)'],   
            ['id_sasaran'=>'19', 'deskripsi_strategi'=>'Meningkatkan pengelolaan sistem keuangan daerah yang bersih dan trasnparan melalui pemanfaatan teknologi informasi pengelolaan keuangan'] 
        ];

        foreach($data as $value){
            Strategi::insert([
                'id_sasaran' => $value['id_sasaran'],
                'deskripsi_strategi' => $value['deskripsi_strategi'],
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]);
        };
    }
}
