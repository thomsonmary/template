<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieUser extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'categorie_user';
    protected $fillable =
    [
        'id',
        'categorie_id',
        'user_id',
        'judul_berita_ina',
        'sluk',
        'trending',
        'headline',
        'aktif',
        'isi_berita_ina',
        'gambar',
        'hari',
        'tanggal',
        'jam',
        'video',
        'view',
        'created_at',
        'updated_at'
    ];

    public function convertDateDBtoIndo($string)
    {
        // contoh : 2019-01-30

        $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $tanggal = explode("-", $string)[2];
        $bulan = explode("-", $string)[1];
        $tahun = explode("-", $string)[0];

        return $tanggal . " " . $bulanIndo[abs($bulan)] . " " . $tahun;
    }

}
