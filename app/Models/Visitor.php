<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'visitors';
    protected $fillable = [
        'categorieuser_id',
        'tanggal',
        'ip_address',
        'counter',
        'browser',
        'created_at',
        'updated_at'
    ];
}
