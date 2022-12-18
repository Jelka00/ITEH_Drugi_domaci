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
        Schema::table('sky_resorts', function (Blueprint $table) {
            $table->renameColumn('km_of_tracks', 'track_km');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sky_resorts', function (Blueprint $table) {
            $table->renameColumn('track_km', 'km_of_tracks');
        });
    }
};
