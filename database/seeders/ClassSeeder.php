<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        $classes = [
            ['nama_kelas' => '10A'],
            ['nama_kelas' => '10B'],
            ['nama_kelas' => '11A'],
            ['nama_kelas' => '11B'],
            ['nama_kelas' => '12A'],
            ['nama_kelas' => '12B'],
        ];

        foreach ($classes as $class) {
            DB::table('kelas')->insert($class);
        }
    }
}
