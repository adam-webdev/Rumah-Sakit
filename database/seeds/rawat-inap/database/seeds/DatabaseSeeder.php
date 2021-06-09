<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PenggunaSeeder::class);
        $this->call(DokterSeeder::class);
        $this->call(ObatSeeder::class);
        $this->call(KamarSeeder::class);
        $this->call(PasienSeeder::class);
    }
}
