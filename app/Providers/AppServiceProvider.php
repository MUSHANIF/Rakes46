<?php

namespace App\Providers;

use App\Models\User;
use App\Models\jawaban;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        Schema::defaultStringLength(191);

        Gate::define('superadmin', function (User $user) {
            return $user->level === 5;
        });
        Gate::define('kepala_sekolah', function (User $user) {
            return $user->level === 4;
        });
        Gate::define('puskesmas', function (User $user) {
            return $user->level === 3;
        });
        Gate::define('wali_kelas', function (User $user) {
            return $user->level === 2;
        });
        Gate::define('siswa', function (User $user) {
            return $user->level === 1;
        });

        view()->composer(
            'partials.dashboard-nav',
            function ($view) {
                $view->with('jawabanlama', jawaban::where('userID', auth()->user()->id)->whereCustomTanggal(
                    [now()->subYear(1)->startOfYear(), now()->subYear(1)->lastOfYear()]
                )->count());
            }
        );
    }
}
