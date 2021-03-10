<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_projects', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('image')->nullable();
            $table->string('sub_image')->nullable();
            $table->string('ssub_image')->nullable();
            $table->string('kf_title')->nullable();
            $table->string('kf_image')->nullable();
            $table->longText('kf_description')->nullable();
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
        Schema::dropIfExists('our_projects');
    }
}
