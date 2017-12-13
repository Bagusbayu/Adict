<?php

use Illuminate\Database\Seeder;

class AboutSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 1; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('mfeeds')->insert([ //mengisi datadi database
                'name' => $faker->name,
                'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
                'comment' => $faker->company,
            ]);
        }
    }
}
