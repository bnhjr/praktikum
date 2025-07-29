<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $fillable = ['nama_ruang'];

    public function inventarisRuang()
    {
        return $this->hasOne(InventarisRuang::class);
    }
}
