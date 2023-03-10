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
        Schema::create('sky_track', function (Blueprint $table) {
            $table->id();
            $table->string('track_name');
            $table->string('slug')->unique();
            $table->foreignId('sky_resort_id');
            $table->string('track_length');
            $table->string('track_category');
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
        Schema::dropIfExists('sky_track');
    }
};
