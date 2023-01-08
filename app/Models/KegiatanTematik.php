<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanTematik extends Model
{
    use HasFactory;
    protected $table = 'kegiatan-tematik';
    protected $primaryKey = 'id_kegiatan_tematik';

    public function subbidang()
    {
        return $this->belongsTo(SubBidang::class, 'id_sub_bidang', 'id_sub_bidang');
    }
}
