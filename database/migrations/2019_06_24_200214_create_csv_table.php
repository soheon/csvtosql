<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsvTable extends Migration
{
    public function up()
    {
        // FirstName;LastName;Phone;Address;City;State;County;Zip;Age;Email;Timezone;Gender
        Schema::create('csvdata', function (Blueprint $table) {
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
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('csvdata');
    }
}
