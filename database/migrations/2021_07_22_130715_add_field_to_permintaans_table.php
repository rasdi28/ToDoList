<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToPermintaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permintaans', function (Blueprint $table) {
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('tukangsayur_id');
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans');
            $table->foreign('tukangsayur_id')->references('id')->on('tukangsayurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permintaans', function (Blueprint $table) {
            $table->dropColumn('pelanggan_id');
            $table->dropColumn('tukangsayur_id');
            $table->dropForeign(['pelanggan_id','tukangsayur_id']);
        });
    }
}
