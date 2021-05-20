<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')
            ->constrained('suppliers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nama_obat',50);
            $table->string('harga_obat',50);
            $table->string('fungsi_obat',100);
            $table->string('stok_obat',100);
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
        Schema::dropIfExists('obats');
    }
}
