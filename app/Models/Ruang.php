<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = 'ruang';

    protected $fillable = ['nama', 'luas', 'id_lantai', 'is_booked'];

    public function lantai()
    {
        return $this->belongsTo(Lantai::class, 'id_lantai');
    }
}
