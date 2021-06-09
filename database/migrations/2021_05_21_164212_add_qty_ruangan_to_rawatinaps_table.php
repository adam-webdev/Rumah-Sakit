<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQtyRuanganToRawatinapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rawatinaps', function (Blueprint $table) {
            $table->integer('qty_ruangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rawatinaps', function (Blueprint $table) {
            $table->integer('qty_ruangan')->nullable();
        });
    }
}
