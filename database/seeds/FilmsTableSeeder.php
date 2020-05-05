<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'id'=>'1',
            'filmName'=>'Inception',
            'genre'=>'Fantasy',
            'img'=>'https://media.kg-portal.ru/movies/i/inception/posters/inception_22.jpg',
        ]);
        DB::table('films')->insert([
            'id'=>'2',
            'filmName'=>'Logan',
            'genre'=>'Fantasy',
            'img'=>'https://lamafilm.club/wp-content/uploads/2016/10/logan-2017.jpg',
        ]);
    }
}
