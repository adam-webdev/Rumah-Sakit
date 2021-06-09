<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatinapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawatinap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokter_id')
                    ->constrained('dokter')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('kamar_id')
                    ->constrained('kamar')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('pasien_id')
                    ->constrained('pasien')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        //     $table->string('nama_pasien');
        //     $table->string('tarif_dokter');
        //     $table->string('tarif_kamar');
        //     $table->string('harga_obat');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawatinaps');
    }
}
