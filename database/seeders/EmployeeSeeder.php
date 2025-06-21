<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        $fullname = $faker->name;
        $firstName = strtolower(explode(' ', $fullname)[0]); // ambil suku kata pertama dari nama
        $email = $firstName . '@gmail.com';
        // $email = strtolower(str_replace(' ', '.', $fullname)) . '@gmail.com'; // ambil semua suku kata dari nama

        DB::table('employees')->insert([
            'fullname' => $fullname,
            'email' => $email,
            'phone_number' => $faker->phoneNumber,
            'address' => $faker->address,
            'birth_date' => $faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'hire_date' => $faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
            'departement_id' => $faker->numberBetween(1, 5),
            // 'departement_id' => 1,
            'role_id' => $faker->numberBetween(1, 8),
            'status' => $faker->randomElement(['active', 'unactive']),
            'salary' => $faker->randomFloat(2, 3600000, 18000000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
