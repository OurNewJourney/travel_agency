<?php

namespace App\Providers;

use App\Faker\LocationProvider;
use App\Faker\TransportProvider;
use App\Faker\ApartmentProvider;
use Faker\{Factory, Generator};
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new LocationProvider($faker));
            $faker->addProvider(new TransportProvider($faker));
            $faker->addProvider(new ApartmentProvider($faker));
            return $faker;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}