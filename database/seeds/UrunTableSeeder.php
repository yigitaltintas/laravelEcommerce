<?php

use App\Models\Urun;
use Illuminate\Database\Seeder;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        //

        Urun::truncate();



        for( $i = 0; $i <30; $i++){

            $urun_adi = $faker->sentence(2);

            Urun::create([
                'urun_adi' => $urun_adi,
                'slug' => str_slug($urun_adi),
                'aciklama' => $faker->sentence(5),
                'fiyati' => $faker->randomFloat(3, 1, 20)
            ]);
        }
    }
}
