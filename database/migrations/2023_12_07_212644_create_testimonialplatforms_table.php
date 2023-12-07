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
        Schema::create('testimonial_platforms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->string('image');
            $table->string('code');
            $table->tinyInteger('status')->default(1);
            // $table->integer('order');
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
        Schema::dropIfExists('testimonial_platforms');
    }
};
