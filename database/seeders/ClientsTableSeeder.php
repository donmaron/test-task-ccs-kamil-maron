<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clients;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Clients::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Clients::create([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'phone' => $faker->e164PhoneNumber,
                'email' => $faker->email,
                'issue' => $faker->sentence,
            ]);
        }
    }
}
