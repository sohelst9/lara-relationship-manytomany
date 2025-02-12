<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Advanced Web Development with Laravel',
                'slug' => 'advanced-web-development-with-laravel',
                'description' => 'Master Laravel framework with advanced concepts including authentication, API development, and best practices',
                'price' => '29999',
                'duration' => '6 months',
                'level' => 'Advanced',
                'category' => 'Web Development',
            ],
            [
                'title' => 'UI/UX Design Fundamentals',
                'slug' => 'ui-ux-design-fundamentals',
                'description' => 'Learn the core principles of user interface and user experience design with practical projects',
                'price' => '24999',
                'duration' => '4 months',
                'level' => 'Beginner',
                'category' => 'Design',
            ],
            [
                'title' => 'Digital Marketing Masterclass',
                'slug' => 'digital-marketing-masterclass',
                'description' => 'Comprehensive guide to digital marketing including SEO, social media, and content marketing strategies',
                'price' => '19999',
                'duration' => '3 months',
                'level' => 'Intermediate',
                'category' => 'Marketing',
            ],
            [
                'title' => 'Mobile App Development with Flutter',
                'slug' => 'mobile-app-development-with-flutter',
                'description' => 'Build cross-platform mobile applications using Flutter and Dart programming language',
                'price' => '34999',
                'duration' => '5 months',
                'level' => 'Intermediate',
                'category' => 'Mobile Development',
            ],
            [
                'title' => 'Graphic Design for Beginners',
                'slug' => 'graphic-design-for-beginners',
                'description' => 'Start your journey in graphic design with essential tools and techniques',
                'price' => '22999',
                'duration' => '3 months',
                'level' => 'Beginner',
                'category' => 'Design',
            ]
        ];

        foreach($courses as $course){
            Course::create($course);
        }
    }
}
