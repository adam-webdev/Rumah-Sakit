<?php

use App\Dokter;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DokterSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=0;$i<=50;$i++){
            Dokter::create([
                'nama_dokter' => $faker->name,
                'tarif' => $faker->name,
                'spesialis' => $faker->name,
                'jenis_kelamin' => $faker->name,
                'no_hp' => $faker->name,
                'alamat' => $faker->address,
            ]);
        }
    }
}
