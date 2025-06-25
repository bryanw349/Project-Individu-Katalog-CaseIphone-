<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class caseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<100;$i++){
            DB::table('case')->insert([
                'tipeiphone' => $faker->word(3),
                'warna' => $faker->word(2),
                'stok' => $faker->randomNumber(1, true),
                'harga' => $faker->randomNumber(6, true),
                'gambar' => $faker->url()
            ]);
        }

    }
}
