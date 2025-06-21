<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $randomDate = Carbon::create(2025, 4, $faker->numberBetween(1, 30));

        $judulTugas = collect([
        'Mengisi laporan harian', 
        'Menyusun jadwal kerja', 
        'Melakukan rapat tim', 
        'Menyiapkan dokumen proyek', 
        'Memeriksa stok barang', 
        'Membuat presentasi mingguan', 
        'Mengupdate data pelanggan', 
        'Menanggapi email klien', 
        'Mengatur pertemuan dengan vendor', 
        'Mengarsipkan dokumen penting'])->random();

        DB::table('tasks')->insert([
            'title' => $judulTugas,
            //  'title' => $faker->sentence(3),
            'description' => $faker->paragraph(2),
            // 'assigned_to' => $faker->numberBetween(1, 3),
            'assigned_to' => $faker->numberBetween(1, 5),
            // 'due_date' => $faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            // 'due_date' => Carbon::parse('2025-04-20 08:00:00'),
            'due_date' => $randomDate,
            'status' => $faker->randomElement(['pending', 'done', 'on progress']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
