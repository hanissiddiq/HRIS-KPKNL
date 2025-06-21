<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PresenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        $randomDate = Carbon::create(2025, 4, $faker->numberBetween(1, 30));

        $checkIn = Carbon::create($randomDate->year, $randomDate->month, $randomDate->day, $faker->numberBetween(7, 10), $faker->numberBetween(0, 59));

        $checkOut = Carbon::create($randomDate->year, $randomDate->month, $randomDate->day, $faker->numberBetween(15, 18), $faker->numberBetween(0, 59));

        DB::table('presences')->insert([
            [
                'employee_id' => $faker->numberBetween(1, 10),
                'check_in' => $checkIn,
                'check_out' => $checkOut,
                'date' => ($randomDate = Carbon::create(2025, 4, $faker->numberBetween(1, 30))),
                'status' => $faker->randomElement(['present', 'absent', 'leave']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
