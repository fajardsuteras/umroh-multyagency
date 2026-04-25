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
        Schema::table('agencies', function (Blueprint $table) {
            $table->string('company_name')->nullable();
            $table->string('ppiu_number')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agencies', function (Blueprint $table) {
            $table->dropColumn([
                'company_name',
                'ppiu_number',
                'logo',
                'banner',
                'whatsapp_number',
                'instagram',
                'website'
            ]);
        });
    }
};
