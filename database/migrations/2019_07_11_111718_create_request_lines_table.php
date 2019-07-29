<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('request_type')->nullable();
            $table->string('request_line')->nullable();
            $table->integer('request_line_id')->nullable();
            $table->integer('request_id')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('line_category')->nullable();
            $table->integer('provider_category')->nullable();
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
        Schema::dropIfExists('request_lines');
    }
}
