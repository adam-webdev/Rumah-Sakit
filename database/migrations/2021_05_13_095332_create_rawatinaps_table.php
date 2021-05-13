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
        Schema::create('rawatinaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokter_id')
                    ->constrained('dokters')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('ruangan_id')
                    ->constrained('ruangans')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('pasien_id')
                    ->constrained('pasiens')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
