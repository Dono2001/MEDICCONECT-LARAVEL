<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class RunMigrationsSeeder extends Seeder
{
    public function run()
    {
        // Ejecutar las migraciones
        Artisan::call('migrate');
    }
}