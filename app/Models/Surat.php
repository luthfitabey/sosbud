<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $table = 'surat';
    protected $primaryKey = 'id_surat';
    protected $fillable = ['nomor_surat'];

    public function jenis()
    {
        return $this->belongsTo(JenisSurat::class, 'id_jenis_surat', 'id_jenis_surat');
    }
    public function getImage()
    {
        if (substr($this->keterangan, 0, 5) == "https") {
            return $this->keterangan;
        }

        if ($this->keterangan) {
            return asset('/uploads/imgCover/' . $this->image);
        }

        return 'https://via.placeholder.com/500x500.png?text=No+Cover';
    }
}