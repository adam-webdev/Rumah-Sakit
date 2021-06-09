<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatRawatinapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat_rawatinap', function (Blueprint $table) {
            $table->primary(['obat_id','rawatinap_id']);
            $table->foreignId('obat_id')
            ->constrained('obats')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('rawatinap_id')
            ->constrained('rawatinaps')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('obat_rawatinap');
    }
}
