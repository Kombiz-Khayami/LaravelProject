<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->uuid('id');
            $table->String('APIid');             //id
            $table->String('Name');              //name
            $table->integer('CMC');              //cmc
            $table->boolean('Foil');             //foil
            $table->boolean('Promo');            //promo
            $table->String('Image');             //image_uris->normal
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
        Schema::dropIfExists('cards');
    }
}
