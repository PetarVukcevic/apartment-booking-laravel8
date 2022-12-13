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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('main_heading', 30);
            $table->text('main_helper', 30);
            $table->string('short_description', 200);
            $table->string('main_description', 600);
            $table->text('heading_one', 30);
            $table->text('description_one', 400);
            $table->text('signature_img_url');
            $table->text('heading_two', 30);
            $table->text('helper_two', 30);
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
        Schema::dropIfExists('abouts');
    }
};
