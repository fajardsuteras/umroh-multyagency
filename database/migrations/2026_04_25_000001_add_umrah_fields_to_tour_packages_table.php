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
        Schema::table('tour_packages', function (Blueprint $table) {
            $table->decimal('price_quad', 28, 8)->nullable();
            $table->decimal('price_triple', 28, 8)->nullable();
            $table->decimal('price_double', 28, 8)->nullable();
            $table->string('airline_name')->nullable();
            $table->string('flight_type')->nullable(); // Direct or Transit
            $table->string('hotel_makkah')->nullable();
            $table->string('hotel_makkah_rating')->nullable();
            $table->string('hotel_madinah')->nullable();
            $table->string('hotel_madinah_rating')->nullable();
            $table->text('includes')->nullable();
            $table->text('excludes')->nullable();
            $table->string('departure_city')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_packages', function (Blueprint $table) {
            $table->dropColumn([
                'price_quad',
                'price_triple',
                'price_double',
                'airline_name',
                'flight_type',
                'hotel_makkah',
                'hotel_makkah_rating',
                'hotel_madinah',
                'hotel_madinah_rating',
                'includes',
                'excludes',
                'departure_city'
            ]);
        });
    }
};
