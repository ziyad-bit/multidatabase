<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $int= mt_rand(1262055681,1262055681);
            $string = date("Y-m-d H:i:s",$int);
            
			Item::create([
                'name'        => $faker->unique()->name(),  
                'description' => $faker->paragraph(2),
                'created_at' => $string,
			]);

            Item::on('mysql2')->create([
                'name'        => $faker->unique()->name(),
                'description' => $faker->paragraph(2),
                'created_at' => $string,
			]);

            Item::on('mysql3')->create([
                'name'        => $faker->unique()->name(),
                'description' => $faker->paragraph(2),
                'created_at' => $string,
			]);
        }
    }
}
