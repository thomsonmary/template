<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $table = 'users';
  protected $fillable = [
    'name',
    'email',
    'password',
    'level',
    'login',
    'avatar',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];


  public function roles()
  {
    return $this->belongsToMany(Role::class);
  }

  public function hasAnyRoles($roles)
  {
    if ($this->roles()->whereIn('role', $roles)->first()) {
      return true;
    }
    return false;
  }
  public function hasRole($role)
  {
    if ($this->roles()->where('role', $role)->first()) {
      return true;
    }
    return false;
  }

  public function categories()
  {
    return $this->belongsToMany('App\Http\Models\Categorie')->withPivot([
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

  public function getAvatar()  // fungsi untuk memanggil avatar
  {
    if (!$this->avatar) {
      return asset('3.images/default.jpg');  //jika tidak ada poto/avatar diganti dg poto default
    }
    return asset('3.images/' . $this->avatar); //jika ada dilanjutkan dengan poto yg telah diupload
  }
}
