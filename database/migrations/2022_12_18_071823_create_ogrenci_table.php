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
        Schema::create('ogrenci', function (Blueprint $table) {
            $table->id();
            $table->integer("ogrenci_no");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("bolum_ID");
            $table->string("sinif");
            $table->string("resim")->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('bolum_ID')->references('id')->on('bolum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ogrenci');
    }
};
