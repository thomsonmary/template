<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'videos';
    protected $fillable = [
        'judul_video',
        'keterangan_video',
        'hari',
        'tanggal',
        'jam',
    ];

}
