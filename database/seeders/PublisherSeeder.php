<?php

namespace Database\Seeders;

use App\Models\publisher;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $publishers = [
            [
                'name' => 'Gramedia',
                'address' => "Jalan Palmerah",
                'phone' => fake()->phoneNumber(),
                'email' => fake()->safeEmail(),
                'image' => 'gramedia.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Tiga Serangkai',
                'address' => "Jalan Merdeka",
                'phone' => fake()->phoneNumber(),
                'email' => fake()->safeEmail(),
                'image' => 'tiga_serangkai.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ];

        publisher::insert($publishers);
    }
}
