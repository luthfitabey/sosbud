<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPendukung extends Model
{
    use HasFactory;
    protected $table = 'program-pendukung';
    protected $primaryKey = 'id_program_pendukung';

    public function strategi()
    {
        return $this->belongsTo(Strategi::class, 'id_strategi', 'id_strategi');
    }

    public function kegiatantematik()
    {
        return $this->belongsTo(KegiatanTematik::class, 'id_kegiatan_tematik', 'id_kegiatan_tematik');
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'id_user', 'id_user');
    }
}
