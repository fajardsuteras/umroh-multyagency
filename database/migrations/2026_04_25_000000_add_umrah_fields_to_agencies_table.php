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
            $table->string('company_name')->nullable(); // Nama Travel

            $table->string('pic_contact')->nullable(); // Kontak PIC (WA / Telp)

            $table->string('logo')->nullable(); // Logo (16x16 px disarankan di level validasi)

            $table->text('social_media')->nullable();
            // Contoh: instagram.com/a, tiktok.com/b, facebook.com/c

            $table->text('addresses')->nullable();
            // Contoh: Jakarta, Bandung, Surabaya

            // OPTIONAL (kalau masih relevan)
            $table->string('ppiu_number')->nullable();
            $table->string('banner')->nullable();
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
                'pic_contact',
                'logo',
                'social_media',
                'addresses',
                'ppiu_number',
                'banner',
                'website'
            ]);
        });
    }
};
