<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestLineNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_line_names', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('line_category_id');
            $table->integer('provider_category_id');
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('duration')->nullable();
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
        Schema::dropIfExists('request_line_names');
    }
}
