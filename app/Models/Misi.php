<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;
    protected $table = 'misi';
    protected $primaryKey = 'id_misi';

    public function visi()
    {
        return $this->belongsTo(Visi::class, 'id_visi', 'id_visi');
    }
}
