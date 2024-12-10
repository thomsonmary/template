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
        Gate::define('Hanya_Untuk_Administrator', function(User $user){
          return $user->hasAnyRoles(['admin', 'dosen', 'gkm', 'homeless', ]);
        });
        // Coba roles home selain mereka bertiga
        Gate::define('Hanya_Untuk_Dosen', function(User $user){
          return $user->hasRole(['dosen']);
        });
        Gate::define('Hanya_Untuk_Gkm', function(User $user){
          return $user->hasRole(['gkm']);
        });
        Gate::define('Hanya_Admin_Edit', function(User $user){
          return $user->hasRole('admin');
        }); 
        Gate::define('Hanya_Admin_Delete', function(User $user){
          return $user->hasRole('admin');
        }); 

   
    }
}
