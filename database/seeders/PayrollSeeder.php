<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
       DB::table('payroll')->insert([
            [
                'employee_id' => $faker->numberBetween(1, 5),
                'salary' => $faker->randomFloat(2, 3600000, 1800000),
                'bonuses' => $faker->randomFloat(2, 0, 200000),
                'deductions' => $faker->randomFloat(2, 0, 100000),
                'net_salary' => $faker->randomFloat(2, 3600000, 18000000),
                'pay_date' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
        ]);
    }
}
