<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $faker = Factory::create("id_ID");
        foreach(range(1,5) as $item) {
            User::create([
                'name' => $faker->name,
                'email' => 'user'.$item.'@example.megono',
                'password' => Hash::make('password')
            ]);
        }
    }
}
