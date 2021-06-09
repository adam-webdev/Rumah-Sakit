<?php

use App\dokter;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $dokter = new dokter;
        $dokter->nama_dokter = 'Andi dede';
        $dokter->tarif = 90000;
        $dokter->jenis_kelamin = 'Laki-Laki';
        $dokter->spesialis = 'Hati';
        $dokter->no_hp = 90080808;
        $dokter->alamat = 'Bandung';
        $dokter->save();
        // dokter::create([
        //     'nama_dokter' => 'Dede',
        //     'tarif' => 300000,
        //     'jenis_kelamin' => 'Laki-laki',
        //     'spesialis' => 'Jantung',
        //     'no_hp' => '0898980980',
        //     'alamat' => 'Bekasi'
        // ]);
    }
}
