<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;
    protected $table = 'tujuan';
    protected $primaryKey = 'id_tujuan';

    public function misi()
    {
        return $this->belongsTo(Misi::class, 'id_misi', 'id_misi');
    }
}
