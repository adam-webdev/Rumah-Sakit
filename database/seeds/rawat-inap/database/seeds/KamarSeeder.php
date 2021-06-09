<?php

use App\kamar;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar = new kamar;
        $kamar->kelas = 'VIP';
        $kamar->tarif_perhari = 40000;
        $kamar->save();
        // kamar::create([
        //     'kelas' => 'VVIP',
        //     'tarif_perhari' => 500000,
        // ]);
    }
}
