<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apis', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('Country');
            $table->string('CountryCode');
            $table->string('Slug');
            $table->integer('NewConfirmed');
            $table->integer('TotalConfirmed');
            $table->integer('NewDeaths');
            $table->integer('TotalDeaths');
            $table->integer('NewRecovered');
            $table->integer('TotalRecovered');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apis');
    }
}
