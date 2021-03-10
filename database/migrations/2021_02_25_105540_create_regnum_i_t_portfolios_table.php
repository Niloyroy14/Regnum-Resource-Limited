<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegnumITPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regnum_i_t_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('button')->nullable();
            $table->string('butn_data_filter')->nullable();
            $table->string('category')->nullable();
            $table->string('class')->nullable();
            $table->string('data_filter')->nullable();
            $table->string('image')->nullable();
            $table->string('imagetitle')->nullable();
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
        Schema::dropIfExists('regnum_i_t_portfolios');
    }
}
