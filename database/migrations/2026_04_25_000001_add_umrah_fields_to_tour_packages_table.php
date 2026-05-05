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

        // MEDIA
        $table->string('thumbnail')->nullable();
        $table->json('gallery')->nullable();

        // BASIC INFO
        $table->string('category')->nullable(); // Umroh / Non Umroh
        $table->string('package_name')->nullable();

        // RELATION
        $table->foreignId('agency_id')->nullable()->constrained('agencies')->nullOnDelete();

        // TRIP DETAIL
        $table->string('departure_city')->nullable();
        $table->integer('duration_days')->nullable();
        $table->integer('quota')->nullable();

        // PRICING
        $table->decimal('price', 15, 2)->nullable();
        $table->string('package_type')->nullable(); // Single, Double, dll

        // FLIGHT
        $table->string('airline_name')->nullable();
        $table->string('flight_type')->nullable(); // Direct / Transit

        // HOTEL
        $table->string('hotel_primary')->nullable();
        $table->string('hotel_secondary')->nullable();

        // CONTENT
        $table->text('includes')->nullable();
        $table->text('excludes')->nullable();
        $table->text('highlights')->nullable();
        $table->text('destination_summary')->nullable();
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
                'thumbnail',
                'gallery',
                'category',
                'package_name',
                'agency_id',
                'departure_city',
                'duration_days',
                'quota',
                'price',
                'package_type',
                'airline_name',
                'flight_type',
                'hotel_primary',
                'hotel_secondary',
                'includes',
                'excludes',
                'highlights',
                'destination_summary'
            ]);
        });
    }
};
