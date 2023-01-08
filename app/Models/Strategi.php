<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategi extends Model
{
    use HasFactory;
    protected $table = 'strategi';
    protected $primaryKey = 'id_strategi';

    public function sasaran()
    {
        return $this->belongsTo(Sasaran::class, 'id_sasaran', 'id_sasaran');
    }
}
