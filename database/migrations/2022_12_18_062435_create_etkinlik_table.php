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
        Schema::create('etkinlik', function (Blueprint $table) {
            $table->id();
            $table->string("etkinlik_adi");
            $table->text("bilgi");
            $table->unsignedBigInteger("kota");
            $table->dateTime("baslangic_zamani");
            $table->dateTime("bitis_zamani");
            $table->string("kalkis_noktasi");
            $table->boolean("etkin");
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
        Schema::dropIfExists('etkinlik');
    }
};
