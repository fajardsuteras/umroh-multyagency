<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agency;
use App\Models\TourPackage;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class JejakImaniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Create or get "Umroh" category
        $category = Category::firstOrCreate(
            ['name' => 'Umroh'],
            ['status' => 1]
        );

        // 2. Create the Agency
        $agency = Agency::firstOrCreate(
            ['email' => 'info@jejakimani.com'],
            [
                'firstname' => 'Jejak',
                'lastname' => 'Imani',
                'username' => 'jejakimani',
                'password' => Hash::make('password123'), // default password
                'company_name' => 'Jejak Imani',
                'address' => json_decode(json_encode([
                    'address' => 'Intermark Indonesia Ruko 9 & 10, Jalan Lingkar Timur No. 9 BSD Kota Tangerang Selatan, Banten 15310'
                ])),
                'mobile' => '08111111111',
                'status' => 1,
                'ev' => 1,
                'sv' => 1,
                'kv' => 1,
            ]
        );

        // 3. Define the Packages
        $packages = [
            [
                'title' => 'Yaqin Umroh',
                'description' => '<p>Paket umroh dengan harga lebih terjangkau</p>',
                'price' => 29900000,
                'day_nights' => '9 Hari',
                'airline_name' => 'Indigo/Setaraf LCC',
                'hotel_makkah' => 'Bintang 3',
                'hotel_makkah_rating' => 3,
                'hotel_madinah' => 'Bintang 3',
                'hotel_madinah_rating' => 3,
            ],
            [
                'title' => 'Onyx',
                'description' => '<p>Paket umroh fasilitas hotel hingga bintang 5 & harga lebih terjangkau</p>',
                'price' => 35500000,
                'day_nights' => '9 Hari',
                'airline_name' => 'Saudia Airlines',
                'hotel_makkah' => 'Bintang 3 - 5',
                'hotel_makkah_rating' => 5,
                'hotel_madinah' => 'Bintang 3 - 5',
                'hotel_madinah_rating' => 5,
            ],
            [
                'title' => 'Ruby',
                'description' => '<p>Paket umroh fasilitas lengkap & hotel bintang 5</p>',
                'price' => 41500000,
                'day_nights' => '9 Hari',
                'airline_name' => 'Saudia Airlines',
                'hotel_makkah' => 'Bintang 3 - 5',
                'hotel_makkah_rating' => 5,
                'hotel_madinah' => 'Bintang 3 - 5',
                'hotel_madinah_rating' => 5,
            ],
            [
                'title' => 'Sapphire',
                'description' => '<p>Paket umroh dengan fasilitas hotel bintang 5 & lebih dekat</p>',
                'price' => 48900000,
                'day_nights' => '9 Hari',
                'airline_name' => 'Saudia Airlines',
                'hotel_makkah' => 'Bintang 5',
                'hotel_makkah_rating' => 5,
                'hotel_madinah' => 'Bintang 5',
                'hotel_madinah_rating' => 5,
            ],
            [
                'title' => 'Sapphire Plus',
                'description' => '<p>Paket umroh dengan makanan & hotel bintang 5</p>',
                'price' => 64200000,
                'day_nights' => '9 Hari',
                'airline_name' => 'Saudia Airlines',
                'hotel_makkah' => 'Bintang 5',
                'hotel_makkah_rating' => 5,
                'hotel_madinah' => 'Bintang 5',
                'hotel_madinah_rating' => 5,
            ]
        ];

        // 4. Insert Packages
        foreach ($packages as $pkg) {
            TourPackage::create(array_merge($pkg, [
                'user_id' => $agency->id,
                'user_type' => 'agency',
                'category_id' => $category->id,
                'status' => 1,
                'tour_start' => Carbon::now()->addDays(30)->toDateTimeString(),
                'tour_end' => Carbon::now()->addDays(39)->toDateTimeString(),
                'address' => 'Intermark Indonesia Ruko 9 & 10, Jalan Lingkar Timur No. 9 BSD Kota Tangerang Selatan, Banten 15310',
                'person_capability' => 40,
                'flexible_date' => 1,
                'features' => json_decode('[]'),
                'icons' => json_decode('[]'),
                'includes' => json_decode('[]'),
                'excludes' => json_decode('[]'),
                'highlights' => json_decode('[]'),
                'destination_overview' => json_decode('[]'),
            ]));
        }
    }
}
