<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Van;
use Faker\Generator as Faker;

class VanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $vans = new Van();

        $vans->brand = $faker->company();
        $vans->weight = $faker->numberBetween(0, 100);





        $vans->save();
    }
}
