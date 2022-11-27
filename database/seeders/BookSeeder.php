<?php

namespace Database\Seeders;

use App\Models\book;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $books = [

            [
                'title' => 'Under The Kitchen Table',
                'author' => 'Desy Miladiana',
                'year' => 2022,
                'synopsis' => 'Celebrity Chef, Sadewa Hartanto, memergoki istrinya berselingkuh di dapur apartemen mereka. Karena terikat kontrak pekerjaan, dia tidak bisa mengajukan perceraian. Dewa pun dianjurkan menyepi ke Bali untuk menenangkan diri di Sutar, vila keluarga mereka. Namun, vila tersebut sudah ditempati Arkadewi, sahabat adik Dewa. Wanita itu juga sedang memulihkan hati dari perceraian sebulan lalu. Ketertarikan yang sama di dunia kuliner pun membangkitkan kenangan masa remaja mereka. Dengan dalih sama-sama ingin menyembuhkan luka, mereka seakan menutup kenyataan bahwa Dewa masih terikat pernikahan. Keadaan mulai kacau saat akun gosip mengunggah momen pribadi mereka. Dewi dituduh menjadi perusak rumah tangga Dewa. Bahkan wanita itu sampai dikerubungi wartawan di restoran tempatnya bekerja. Satu-satunya cara untuk keluar dari situasi rumit ini adalah Dewa kembali ke Jakarta, ke pelukan istrinya. Namun, bagaimana bisa dia pergi saat hatinya telah terikat pada Ubud dan juga sosok Dewi?',
                'image' => 'under_the_kitchen_table.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'publisher_id' => 1,
            ],
            [
                'title' => 'Historical Romance: To Seduce a Sinner',
                'author' => 'Elizabeth Hoyt',
                'year' => 2018,
                'synopsis' => 'Historical Romance: To Seduce a Sinner (Rayuan yang Menawan)',
                'image' => 'Historical-Romance_To-Seduce-a-Sinner.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'publisher_id' => 1,
            ],
            [
                'title' => 'Timeless Beauty',
                'author' => 'Donafeby Widyani',
                'year' => 2018,
                'synopsis' => 'Kecantikan tidak boleh hanya dilihat dari satu sisi saja, kecantikan holistik harus terdiri dari body, mind, and soul. Jika pikiran seorang perempuan positif maka pikiran itu akan membawanya ke berbagai macam lini kehidupan, karena dia akan dapat mengambil keputusan yang benar dalam hidupnya. Jangan takut memperlihatkan kecantikan holistikmu!',
                'image' => 'timeless_beauty.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'publisher_id' => 2,
            ],
        ];
        book::insert($books);
    }
}
