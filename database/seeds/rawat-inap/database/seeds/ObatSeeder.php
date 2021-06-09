<?php

use App\Obat;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obat = new Obat;
        $obat->nama_obat = "Paramex";
        $obat->harga_obat = 9000;
        $obat->fungsi_obat = "Sakit Pala";
        $obat->save();
        // Obat::create([
        //     'nama_obat' => 'Bodrex',
        //     'harga_obat' => 40000,
        //     'fungsi_obat' => 'Sakit Kepala'
        // ]);
    }
}
