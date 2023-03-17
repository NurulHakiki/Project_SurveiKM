<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id('id_client');
            $table->integer('id_kategori');
            $table->string('kategori');
            $table->integer('id_sub_kategori');
            $table->string('sub_kategori');
            $table->enum('range',['kurang baik', 'cukup baik', 'baik', 'sangat baik']);
            $table->timestamps();
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
        Schema::dropIfExists('client');
    }
};
