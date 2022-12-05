<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    use HasFactory;

    protected $table = 'detail_peminjaman';
    protected $fillable = ['peminjaman_id', 'motor_id'];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }

    public function motor()
    {
        return $this->belongsTo(Motor::class);
    }
}
