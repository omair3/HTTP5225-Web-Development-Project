<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // List of realistic course names
        $courseNames = [
            'Introduction to Programming',
            'Web Development Fundamentals',
            'Database Management Systems',
            'Data Structures and Algorithms',
            'Machine Learning Basics',
            'Software Engineering Principles',
            'Cybersecurity Essentials',
            'Mobile App Development',
            'Cloud Computing',
            'Artificial Intelligence'
        ];

        // List of realistic course descriptions
        $courseDescriptions = [
            'Learn the basics of programming with hands-on projects and real-world examples.',
            'Explore the fundamentals of building responsive websites using HTML, CSS, and JavaScript.',
            'Master the design and management of relational databases for efficient data storage.',
            'Understand core data structures and algorithms to solve complex computational problems.',
            'Dive into machine learning concepts and techniques for predictive modeling.',
            'Study software development methodologies and best practices for building robust applications.',
            'Learn essential cybersecurity techniques to protect systems and data from threats.',
            'Develop skills to create mobile applications for iOS and Android platforms.',
            'Understand cloud computing architectures and services for scalable solutions.',
            'Explore the foundations of AI, including neural networks and deep learning.'
        ];

        // Ensure name and description are paired correctly
        $index = $this->faker->numberBetween(0, 9);

        return [
            'name' => $courseNames[$index],
            'description' => $courseDescriptions[$index]
        ];
    }
}