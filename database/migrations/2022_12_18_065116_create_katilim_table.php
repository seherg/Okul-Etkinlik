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
        Schema::create('katilim', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("katilimci_id");
            $table->unsignedBigInteger("etkinlik_id");
            $table->string("katilimci_pozisyon");
            $table->timestamps();

            $table->foreign('etkinlik_id')->references('id')->on('etkinlik')->cascadeOnDelete();
            $table->foreign('katilimci_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('katilim');
    }
};
