<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sasaran extends Model
{
    use HasFactory;
    protected $table = 'sasaran';
    protected $primaryKey = 'id_sasaran';

    public function tujuan()
    {
        return $this->belongsTo(Tujuan::class, 'id_tujuan', 'id_tujuan');
    }
}
