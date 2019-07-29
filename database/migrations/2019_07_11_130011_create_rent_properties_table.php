<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('property_type')->nullable();
            $table->string('rental_purpose')->nullable();
            $table->string('budget')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->date('duration')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('town_id')->nullable();
            $table->integer('min_range')->nullable();
            $table->integer('max_range')->nullable();
            $table->integer('num_of_room')->nullable();
            $table->integer('num_of_bath')->nullable();
            $table->integer('num_of_toilet')->nullable();
            $table->integer('time_needed')->nullable();
            $table->integer('optional_feature')->nullable();
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
        Schema::dropIfExists('rent_property');
    }
}
