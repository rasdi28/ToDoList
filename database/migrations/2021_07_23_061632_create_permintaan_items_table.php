<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permintaan_id');
            $table->unsignedBigInteger('item_id');
            $table->integer('kuantitas');
            $table->integer('harga');
            $table->timestamps();
            $table->foreign('permintaan_id')->references('id')->on('permintaans');
            $table->foreign('item_id')->references('id')->on('items');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_items');
    }
}
