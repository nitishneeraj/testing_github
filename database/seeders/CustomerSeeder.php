<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // foreach (range(1, 10) as $index) {
        //     DB::table('customers')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'phone_no' => $faker->phoneNumber, // Corrected method name
        //         'address' => $faker->address,
        //         // Add more columns and fake data as needed
        //     ]);
        // }

        // for ($i = 0; $i < 10; $i++) {
        //     Customers::create([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'phone_no' => $faker->phoneNumber,
        //         'address' => $faker->address,
        //     ]);
        // }

    }
}
