<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bookCategory = [
            [
                'book_id' => 1,
                'category_id' =>2
            ],
            [
                'book_id' => 1,
                'category_id' =>4
            ],
            [
                'book_id' => 2,
                'category_id' =>4
            ],
            [
                'book_id' => 2,
                'category_id' =>5
            ],
            [
                'book_id' => 3,
                'category_id' => 2
            ],
            [
                'book_id' => 3,
                'category_id' =>6
            ],
        ];

        foreach($bookCategory as $data){
            DB::table('book_category')->insert($data);
        }
    }
}
