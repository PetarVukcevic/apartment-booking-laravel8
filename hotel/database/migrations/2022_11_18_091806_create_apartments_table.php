<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->string('slug', 40);
            $table->foreignId('category_id');
            $table->foreignId('city_id');
            $table->foreignId('user_id');
            $table->integer('rooms');
            $table->float('price');
            $table->text('description');
            $table->string('img_url');
            $table->string('single_img_url');
            $table->string('home_img_url');
            $table->string('address',100);
            $table->integer('adults');
            $table->integer('children')->nullable();
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
        Schema::dropIfExists('apartments');
    }
};
