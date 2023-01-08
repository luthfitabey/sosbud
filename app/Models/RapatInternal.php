<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapatInternal extends Model
{
    use HasFactory;
    protected $table = 'rapat-internal';
    protected $primaryKey = 'id_rapat_internal';

    public function kegiatantematik()
    {
        return $this->belongsTo(KegiatanTematik::class, 'id_kegiatan_tematik', 'id_kegiatan_tematik');
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'id_user', 'id_user');
    }
}
