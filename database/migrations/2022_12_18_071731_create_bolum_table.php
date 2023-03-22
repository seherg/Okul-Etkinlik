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
        Schema::create('bolum', function (Blueprint $table) {
            $table->id();
            $table->string("bolum_adi");
            $table->unsignedBigInteger("fakulte_id");
            $table->timestamps();

            $table->foreign('fakulte_id')->references('id')->on('fakulte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bolum');
    }
};
