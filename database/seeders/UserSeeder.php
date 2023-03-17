<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
			User::create([
				'name'              => $faker->unique()->name(),
				'email'             => $faker->unique()->email(),
				'email_verified_at' => now(),
				'password'          => Hash::make('12121212'),                // password
				'remember_token'    => Str::random(10),
			]);

            User::on('mysql2')->create([
				'name'              => $faker->unique()->name(),
				'email'             => $faker->unique()->email(),
				'email_verified_at' => now(),
				'password'          => Hash::make('12121212'),                // password
				'remember_token'    => Str::random(10),
			]);

            User::on('mysql3')->create([
				'name'              => $faker->unique()->name(),
				'email'             => $faker->unique()->email(),
				'email_verified_at' => now(),
				'password'          => Hash::make('12121212'),                // password
				'remember_token'    => Str::random(10),
			]);

		}
    }
}
