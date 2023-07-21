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
        for ($i=0; $i < 10; $i++) {
            $vans = new Van();

            $vans->brand = $faker->company();
            $vans->description = $faker->paragraph();;
            $vans->image = $faker->image(null, 640, 480);
            $vans->color = $faker->colorName();
            $vans->automatic_gear = $faker->boolean();
            $vans->release_date = $faker->date('Y_m_d');

            $vans->save();
        }
    }
}
