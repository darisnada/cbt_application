<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subkategori extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
}
