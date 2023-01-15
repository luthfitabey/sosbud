<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
    use HasFactory;
    protected $table = 'jenis-surat';
    protected $primarykey = 'id_jenis_surat';
    protected $fillable = ['id_jenis_surat'];
}
