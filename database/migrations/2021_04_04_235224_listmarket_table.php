<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListmarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_market', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('note')->nullable();
            $table->bigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_market');
    }
}
