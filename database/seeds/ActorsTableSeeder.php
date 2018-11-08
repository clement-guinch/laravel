<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
          [
            "name" => "Stallone",
          ],
          [
            "name" => "Cruise",
          ],
          [
            "name" => "Johansson",
          ],
          [
            "name" => "Hardy",
          ],
          [
            "name" => "Murphy",
          ],
        ]);

    }
}
