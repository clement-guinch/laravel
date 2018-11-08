<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('genres')->insert([
        [
          "name" => "Horreur",
        ],
        [
          "name" => "Science-fiction",
        ],
        [
          "name" => "Action",
        ],
        [
          "name" => "Aventure",
        ],
      ]);
    }
}
