<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'categories';
    protected $fillable = [
        'nama_kategori',
        'slug_kategori'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot([
            'judul_berita_ina',
            'sluk',
            'judul_berita_eng',
            'slug',
            'headline',
            'aktif',
            'isi_berita_ina',
            'isi_berita_eng',
            'gambar_berita',
            'tanggal',
            'jam',
            'tag',
            'video',
            'view',
            'categorie_id',
            'user_id',

        ]);
    }
}
