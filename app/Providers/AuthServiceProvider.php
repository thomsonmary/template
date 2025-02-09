<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The model to policy mappings for the application.
   *
   * @var array<class-string, class-string>
   */
  protected $policies = [
    //
  ];

  /**
   * Register any authentication / authorization services.
   */
  public function boot(): void
  {
    $this->registerPolicies();
    // MEMBUAT GATE DARI USER.php  hasAnyRoles(['admin', 'dosen', 'gkm']);
    Gate::define('Hanya_Untuk_Administrator', function (User $user) {
      return $user->hasAnyRoles(['admin', 'redaksi', 'kontributor', 'tamu',]);
    });
    // Coba roles home selain mereka bertiga
    Gate::define('Hanya_Untuk_Redaksi', function (User $user) {
      return $user->hasRole(['redaksi']);
    });
    Gate::define('Hanya_Untuk_Kontributor', function (User $user) {
      return $user->hasRole(['kontributor']);
    });
    Gate::define('Hanya_Admin_Edit', function (User $user) {
      return $user->hasRole('admin');
    });
    Gate::define('Hanya_Admin_Delete', function (User $user) {
      return $user->hasRole('admin');
    });
  }
}
