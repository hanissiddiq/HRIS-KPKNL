<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class HumanResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        // DB::table('departements')->insert([
        //     'name' => $faker->randomElement([
        //         'Sumber Daya Manusia', // HR
        //         'Teknologi Informasi', // IT
        //         'Keuangan', // Finance
        //         'Humas dan Pemasaran', // Marketing
        //         'Pelayanan Lelang', // Sales-like
        //         'Hukum dan Kepatuhan',
        //         'Penilaian Aset',
        //         'Pengelolaan Aset',
        //         'Pengaduan dan Informasi Publik',
        //     ]),
        //     'description' => $faker->sentence,
        //     'status' => $faker->randomElement(['active', 'inactive']),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        DB::table('departements')->insert([
            [
                'name' => 'Sumber Daya Manusia',
                'description' => 'Mengelola sumber daya manusia',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Teknologi Informasi',
                'description' => 'Mengelola sistem informasi',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Keuangan',
                'description' => 'Mengelola keuangan perusahaan',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Humas dan Pemasaran',
                'description' => 'Mengelola hubungan masyarakat dan pemasaran',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pelayanan Lelang',
                'description' => 'Mengelola pelayanan lelang',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hukum dan Kepatuhan',
                'description' => 'Mengelola hukum dan kepatuhan',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Penilaian Aset',
                'description' => 'Mengelola penilaian aset',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pengelolaan Aset',
                'description' => 'Mengelola pengelolaan aset',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pengaduan dan Informasi Publik',
                'description' => 'Mengelola pengaduan dan informasi publik',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('roles')->insert([
            [
                'title' => 'Manager',
                'description' => 'Mengatur tim dan proyek',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'IT',
                'description' => 'Mengelola sistem informasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'title' => 'Staff',
                'description' => 'Membantu tugas sehari-hari',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Direktur',
                'description' => 'Mengawasi seluruh departemen',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Supervisor',
                'description' => 'Mengawasi tim dan proyek',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('employees')->insert([
            'fullname' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone_number' => $faker->phoneNumber,
            'address' => $faker->address,
            'birth_date' => $faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'hire_date' => $faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
            // 'departement_id' => $faker->numberBetween(1, 5),
            'departement_id' => 1,
            'role_id' => $faker->numberBetween(1, 5),
            'status' => $faker->randomElement(['active', 'inactive']),
            'salary' => $faker->randomFloat(2, 3600000, 18000000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tasks')->insert([
            'title' => $faker->sentence(3),
            'description' => $faker->paragraph(2),
            // 'assigned_to' => $faker->numberBetween(1, 3),
            'assigned_to' => 1,
            // 'due_date' => $faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'due_date' => Carbon::parse('2025-04-20 08:00:00'),
            'status' => $faker->randomElement(['pending', 'completed']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('payroll')->insert([
            [
                'employee_id' => 1,
                // 'employee_id' => $faker->numberBetween(1, 10),
                'salary' => $faker->randomFloat(2, 3600000, 18000000),
                'bonuses' => $faker->randomFloat(2, 0, 200000),
                'deductions' => $faker->randomFloat(2, 0, 100000),
                'net_salary' => $faker->randomFloat(2, 3600000, 18000000),
                'pay_date' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // [
            //     'employee_id' => 2,
            // // 'employee_id' => $faker->numberBetween(1, 10),
            // 'salary' => $faker->randomFloat(2, 3600000, 18000000),
            // 'bonuses' => $faker->randomFloat(2, 0, 200000),
            // 'deductions' => $faker->randomFloat(2, 0, 100000),
            // 'net_salary' => $faker->randomFloat(2, 3600000, 18000000),
            // 'pay_date' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now(),
            // ]
        ]);

        DB::table('presences')->insert([
            [
                'employee_id' => 1,
                // 'employee_id' => $faker->numberBetween(1, 10),
                'check_in' => Carbon::parse('2025-04-01 08:00:00'),
                'check_out' => Carbon::parse('2025-04-01 16:00:00'),
                'date' => Carbon::parse('2025-04-01'),
                'status' => $faker->randomElement(['present', 'absent']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('leave_requests')->insert([
            [
                'employee_id' => 1,
                // 'employee_id' => $faker->numberBetween(1, 10),
                'leave_type' => $faker->randomElement(['Cuti Tahunan', 'Cuti Sakit', 'Cuti Melahirkan', 'Cuti Besar', 'Cuti Alasan Penting', 'Cuti Ibadah', 'Cuti di Luar Tanggungan Negara']),
                'start_date' => Carbon::parse('2025-04-01'),
                'end_date' => Carbon::parse('2025-04-05'),
                'status' => $faker->randomElement(['approved', 'pending']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
