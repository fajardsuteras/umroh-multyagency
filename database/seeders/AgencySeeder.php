<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgencySeeder extends Seeder
{
    public function run()
    {
        DB::table('agencies')->insert([
            [
                'company_name' => 'Cheria Travel',
                'pic_name' => 'Ahmad Fauzi',
                'pic_phone' => '6281234567890',
                'logo' => 'logos/cheria.png',
                'social_media' => 'https://instagram.com/cheriatravel',
                'addresses' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_name' => 'Sindo Wisata',
                'pic_name' => 'Rina Kartika',
                'pic_phone' => '6282233445566',
                'logo' => 'logos/sindo.png',
                'social_media' => 'https://instagram.com/sindowisata',
                'addresses' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_name' => 'Alhijaz Indowisata',
                'pic_name' => 'Hendra Saputra',
                'pic_phone' => '6289988776655',
                'logo' => 'logos/alhijaz.png',
                'social_media' => 'https://instagram.com/alhijaztravel',
                'addresses' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_name' => 'Kanomas Arci Wisata',
                'pic_name' => 'Dewi Lestari',
                'pic_phone' => '6281122334455',
                'logo' => 'logos/kanomas.png',
                'social_media' => 'https://instagram.com/kanomas',
                'addresses' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
