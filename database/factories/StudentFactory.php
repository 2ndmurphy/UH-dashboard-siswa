<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'nis'            => fake()->unique()->numerify('#########'),
            'nama_siswa'     => fake()->name(),
            'email'          => fake()->unique()->safeEmail(),
            'kelas_id'       => Kelas::inRandomOrder()->first()->id,
            'jenis_kelamin'  => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'is_active'      => fake()->boolean(),
        ];
    }
}
