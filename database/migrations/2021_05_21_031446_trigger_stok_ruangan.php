<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class TriggerStokRuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER update_stok_ruangan after INSERT ON rawatinaps
        FOR EACH ROW BEGIN
        UPDATE ruangans
        SET stok_ruangan = stok_ruangan - 1
        WHERE
        id = NEW.id;
        END
        '); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::unprepared('DROP TRIGGER update_stok_ruangan');
    }
}
