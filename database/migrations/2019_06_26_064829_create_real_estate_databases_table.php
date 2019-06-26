<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealEstateDatabasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_databases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('county');
            $table->string('zip');
            $table->string('age');
            $table->string('email')->unique();
            $table->string('timezone');
            $table->string('gender');
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
        Schema::dropIfExists('real_estate_databases');
    }
}
