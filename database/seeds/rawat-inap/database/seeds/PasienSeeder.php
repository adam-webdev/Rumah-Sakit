<?php

use App\pasien;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasien = new pasien;
        $pasien->nama_pasien = 'Dede';
        $pasien->jenis_kelamin = 'Laki-laki';
        $pasien->alamat = 'Bandung';
        $pasien->telepon = 8098098080;
        $pasien->riwayat_penyakit = "Pilex";
        $pasien->save();
        // pasien::create([
        //     'nama_pasien' => 'Andi Han',
        //     'jenis_kelamin' => 'Laki-laki',
        //     'alamat' => 'Bandung',
        //     'telepon' => 8098098080,
        //     'riwayat_penyakit' => 'Pusing',
        // ]);
    }
}
