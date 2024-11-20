<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pengajuan';
    protected $fillable = [
        'user','judul_pengajuan','status','tanggal','foto'
    ];

    public function userPengajuan()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
