<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Professor;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            Student::factory(100)->create();
            echo "Successfully seeded 100 students\n";
        } catch (\Exception $e) {
            echo "Error seeding students: " . $e->getMessage() . "\n";
        }

        try {
            Professor::factory(10)->create();
            echo "Successfully seeded 10 professors\n";
        } catch (\Exception $e) {
            echo "Error seeding professors: " . $e->getMessage() . "\n";
        }

        try {
            Course::factory(10)->create();
            echo "Successfully seeded 10 courses\n";
        } catch (\Exception $e) {
            echo "Error seeding courses: " . $e->getMessage() . "\n";
        }
    }
}