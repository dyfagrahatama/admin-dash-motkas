<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $table = 'motor';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'stok', 'sampul', 'slug', 'produktor', 'kategori_id', 'rak_id', 'penerbit_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }

    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }

    public function motor()
    {
        return $this->hasMany(DetailPeminjaman::class);
    }

    // mutator
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = ucfirst($value);
    }
   
    public function setProduktorAttribute($value)
    {
        $this->attributes['produktor'] = ucfirst($value);
    }
}
